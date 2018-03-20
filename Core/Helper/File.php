<?php
namespace Core\Helper;
class File {
    public static function write($filename, $data, $permission = 0777, $flags = LOCK_EX, $relative = true) {
        // if we have relative path we convert it to full path
        if ($relative && $filename[0] == '.') {
            $path = \Application::get('application.path_full');
            $info = pathinfo($filename);
            $filename = realpath($path . $info['dirname']) . DIRECTORY_SEPARATOR . $info['basename'];
        }
        // write file
        if (file_put_contents($filename, $data, $flags) !== false) {
            @chmod($filename, $permission);
            return true;
        }
        return false;
    }

    public static function read($filename) {
        return file_get_contents($filename);
    }

    public static function mkdir($dir, $permission = 0777) {
        return mkdir($dir, $permission, true);
    }

    public static function delete(string $dir, array $options = []) : bool {
        if (is_dir($dir) && !is_link($dir)) {
            $skip_files = [];
            if (!empty($options['skip_files'])) {
                $skip_files = $options['skip_files'];
                $options['only_contents'] = true;
            }
            $skip_files[] = '.';
            $skip_files[] = '..';
            $objects = scandir($dir);
            foreach ($objects as $v) {
                if (!in_array($v, $skip_files)) {
                    if (!self::delete($dir . DIRECTORY_SEPARATOR . $v, $options)) return false;
                }
            }
            if (empty($options['only_contents'])) {
                return rmdir($dir);
            } else {
                return true;
            }
        } else if (file_exists($dir)) {
            return unlink($dir);
        } else {
            return false;
        }
    }

    public static function iterate($dir, $options = []) {
        $result = [];
        if (empty($options['recursive'])) {
            $iterator = new \DirectoryIterator($dir);
        } else {
            $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($dir));
        }
        foreach ($iterator as $v) {
            if (method_exists($v, 'isDot')) {
                if ($v->isDot()) {
                    continue;
                }
            } else {
                $filename = $v->getFilename();
                if ($filename === '.' || $filename === '..') {
                    continue;
                }
            }
            if (!empty($options['only_extensions']) && !in_array($v->getExtension(), $options['only_extensions'])) {
                continue;
            }
            $result[] = $v->getPathname();
        }
        return $result;
    }

    public static function copy(string $source, string $destination, array $options = []) : bool {
        if (is_dir($source)) {
            $dir = opendir($source);
            if (!file_exists($destination)) {
                if (!self::mkdir($destination)) return false;
            }
            while (($file = readdir($dir)) !== false) {
                if ($file != '.' && $file != '..' && (empty($options['skip_files']) || (!empty($options['skip_files']) && !in_array($file, $options['skip_files'])))) {
                    if (!self::copy($source . DIRECTORY_SEPARATOR . $file, $destination . DIRECTORY_SEPARATOR . $file, $options)) return false;
                }
            }
            closedir($dir);
            return true;
        } else {
            return copy($source, $destination);
        }
    }

    public static function chmod(string $dir_or_file, int $permission = 0777) : bool {
        if (is_dir($dir_or_file)) {
            $dir = opendir($dir_or_file);
            while (($file = readdir($dir)) !== false) {
                if ($file != '.' && $file != '..') {
                    if (!self::chmod($dir_or_file . DIRECTORY_SEPARATOR . $file, $permission)) return false;
                }
            }
            closedir($dir);
            return chmod($dir_or_file, $permission);
        } else {
            return chmod($dir_or_file, $permission);
        }
    }
}