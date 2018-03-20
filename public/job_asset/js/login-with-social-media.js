   // Setup an event listener to make an API call once auth is complete
    
function detectMobileOsVersion() {
    var ua = navigator.userAgent;
    //console.log(ua);
    if (ua.indexOf("Android") >= 0) {
        var androidversion = parseFloat(ua.slice(ua.indexOf("Android") + 8));
        if (androidversion < 4) {
            return false;
        }
        //console.log(androidversion);        
    }
    else if (/iP(hone|od|ad)/.test(navigator.userAgent)) {
            var v = (navigator.appVersion).match(/OS (\d+)_(\d+)_?(\d+)?/);
            var version = parseFloat(parseInt(v[1], 10) + '.' + parseInt(v[2], 10) + '.' + parseInt(v[3] || 0, 10));
            if (version >= 9) {
                return false;
            }
            //console.log(version);
    }
    return true;
}
    
    function onLinkedInLoad() {
            
//            $('a[id*=li_ui_li_gen_]')
//                .html('<img src="/images/linked-in-signin-button.png" border="0" />');    
        
            //console.log("Linkedin load data");
            IN.Event.on(IN, "auth", getProfileData);
        }

        // Handle the successful return from the API call
        function onSuccess(data) {
            //console.log("Linkedin data");
            //console.log(data);

            onLinkedInAuth();
        }

        function onLinkedInAuth() {
            var language = "";
            if (window.location.href.indexOf("\en") > -1) {
                language = 'en';
            }
            IN.API.Profile("me").fields("first-name", "last-name", "email-address", "public-profile-url").result(function (data) {
                //console.log('email data');
                //console.log(data._total);
                //console.log(data.values[0].emailAddress);
                //console.log(data.values[0].firstName);
                //console.log(data.values[0].lastName);
                //console.log(data.values[0].publicProfileUrl);
                //console.log(data);

                if (window.location.href.indexOf("\job-details") > -1 || window.location.href.indexOf("\login") > -1) {
                    __doPostBack("email-" + data.values[0].emailAddress + ";" + "firstname-" + data.values[0].firstName + ";" +
                        "lastname-" + data.values[0].lastName + ";" + "publicprofileurl-" + data.values[0].publicProfileUrl, "sign-in");
                } else {
                var url;

                var lang = "en";
                if (window.location.href.indexOf("\en") > -1)
                    lang = "en";
                else if (window.location.href.indexOf("\mm") > -1)
                    lang = "mm";

                url = '/Ajax/SocialMediaLogin.ashx?firstname=' + data.values[0].firstName + "&lastname=" + data.values[0].lastName
                    + "&email=" + data.values[0].emailAddress + "&publicprofileurl=" + data.values[0].publicProfileUrl
                    + "&lan=" + lang;
                
                $.get(url, function(result) {
                        if (result == 'login-as-employer') {
                            $('#divEmployerNotAllow').show();
                        } else {
                            //alert(result);
                            window.location.href = result;
                        }
                });
            }
            }).error(function (data) {
                console.log(data);
            });
        }

        // Handle an error response from the API call
        function onError(error) {
            console.log("Linkedin error data");
            console.log(error);
        }

        // Use the API call wrapper to request the member's basic profile data
        function getProfileData() {
            IN.API.Raw("/people/~").result(onSuccess).error(onError);
        }
        
        function checkLoginState() {
            $('#div-mobile-linkedin-detect').hide();
            FB.getLoginStatus(function (response) {
                console.log(response);
                if (response.status === 'connected') {
                    loadUserInfoFromFb();
                } else {
                    FB.login(function(response) {
                        if (response.authResponse) {
                            if (response.authResponse.accessToken) {
                                loadUserInfoFromFb();
                            }
                        }
                    }, { scope: 'email' });
                }
            });
        };

        function loadUserInfoFromFb() {
            
            var language = "";
            if (window.location.href.indexOf("\en") > -1)
            {
                language = 'en';
            }
            
            FB.api('/me?fields=id,first_name,last_name,gender,email', function (user) {
                if (user != null) {
                    //console.log(user);

                    if (user.email != undefined) {
                        if (window.location.href.indexOf("\job-details") > -1 || window.location.href.indexOf("\login") > -1) {
                            __doPostBack("email-" + user.email + ";" + "firstname-" + user.first_name + ";" +
                                "lastname-" + user.last_name + ";publicprofileurl-" + "https://www.facebook.com/" + user.id + ";id-" + user.id
                                + ";gender-" + user.gender, "sign-in");
                        } else {

                        var url;
                        url = '/Ajax/SocialMediaLogin.ashx?firstname=' + user.first_name + "&lastname=" + user.last_name
                            + "&email=" + user.email + "&id=" + user.id + "&gender=" + user.gender + "&publicprofileurl=" + "https://www.facebook.com/" + user.id;

                        $.get(url, function(result) {
                            if (result == 'login-as-employer') {
                                $('#divEmployerNotAllow').show();
                            } else {
                                //alert(result);
                                if (result.indexOf('user\profile-setup') > -1) {
                                    ga('send', 'event', { eventCategory: 'Facebook', eventAction: 'Sign Up', eventLabel: 'register page', eventValue: 2 });
                                    console.log('success');
                                }
                                else {
                                    ga('send', 'event', { eventCategory: 'Facebook', eventAction: 'Log in', eventLabel: 'register page', eventValue: 2 });
                                    console.log('success');
                                }
                                window.location.href = result;
                            }
                        });
                    }
                } else {
                        $('#facebook-fail-alert').show();
                    }
                }
            });
        }

        $('#linked-in').click(function () {

            window.location = "/linked-in-request";

            //if (detectMobileOsVersion() == true) {
            //    IN.UI.Authorize().place();
            //    IN.Event.on(IN, "auth", onLinkedInAuth);
            //}
            //else {
            //    $('#div-mobile-linkedin-detect').show();
            //    document.body.scrollTop = document.documentElement.scrollTop = 0;
            //}
        });