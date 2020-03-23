<style scoped media="screen">
  .ammonite-custom-popup-container {
    /* Initial display property is initially set to "none" inline, this inline style is then removed by the script at the appropriate time */
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9999;
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0,0,0,0.5);
  }
  .ammonite-custom-popup-main {
    display: grid;
    grid-template-columns: 2fr 3fr;
    height: min-content;
    width: 800px;
    background-color: white;
  }
  .ammonite-custom-popup-left-section {
    grid-column-start: 1;
    grid-column-end: 2;
    display: flex;
    background-color: #69be69;
  }
  .ammonite-custom-popup-right-section {
    grid-column-start: 2;
    grid-column-end: 3;
    display: flex;
    flex-wrap: wrap;
    padding: 35px;
  }
  .ammonite-custom-popup-right-section-heading {
    flex-basis: 100%;
  }
  .ammonite-custom-popup-right-section-text {
    flex-basis: 100%;
  }
  .ammonite-custom-popup-right-section-form {
    flex-basis: 100%;
    margin-bottom: 35px;
  }
  .ammonite-custom-popup-right-section-form label {
    display: none;
  }
  .ammonite-custom-popup-right-section-form input {
    margin-bottom: 10px;
    box-shadow: 2px 2px 4px rgba(0,0,0,0.3);
  }
  .ammonite-custom-popup-right-section-form .infusion-submit {
    margin-top: 10px;
  }
  .ammonite-custom-popup-right-section-form .infusion-submit button {
    margin-right: 5px;
    border-radius: 3px;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    box-shadow: 2px 2px 4px rgba(0,0,0,0.3);
  }
  .ammonite-custom-popup-right-section-form .ammonite-custom-popup-button-exit {
    background-color: #b7b7b7;
  }

  @media screen and (max-width: 800px) {
    .ammonite-custom-popup-container {
      display: none;
    }
  }
</style>

<div class="ammonite-custom-popup-container" style="display: none;">
  <div class="ammonite-custom-popup-main">
    <div class="ammonite-custom-popup-left-section">
    </div>
    <div class="ammonite-custom-popup-right-section">
      <h1 class="ammonite-custom-popup-right-section-heading">Sign Up and Save</h1>
      <p class="ammonite-custom-popup-right-section-text">You'll recieve 10% off your first purchase, exclusive information, and special offers.</p>
      <form accept-charset="UTF-8" action="https://ay767.infusionsoft.com/app/form/process/cbbd14525742739291f9d8f0f02d4bbc" class="ammonite-custom-popup-right-section-form infusion-form" id="inf_form_cbbd14525742739291f9d8f0f02d4bbc" method="POST">
          <input name="inf_form_xid" type="hidden" value="cbbd14525742739291f9d8f0f02d4bbc" />
          <input name="inf_form_name" type="hidden" value="Web Form submitted" />
          <input name="infusionsoft_version" type="hidden" value="1.70.0.194774" />
          <div class="infusion-field">
              <label for="inf_field_FirstName">First Name *</label>
              <input class="infusion-field-input" id="inf_field_FirstName" name="inf_field_FirstName" placeholder="First Name *" type="text" />
          </div>
          <div class="infusion-field">
              <label for="inf_field_LastName">Last Name *</label>
              <input class="infusion-field-input" id="inf_field_LastName" name="inf_field_LastName" placeholder="Last Name *" type="text" />
          </div>
          <div class="infusion-field">
              <label for="inf_field_Email">Email *</label>
              <input class="infusion-field-input" id="inf_field_Email" name="inf_field_Email" placeholder="Email *" type="text" />
          </div>
          <div class="infusion-submit">
              <button class="ammonite-custom-popup-button-submit infusion-recaptcha" id="recaptcha_cbbd14525742739291f9d8f0f02d4bbc" type="submit">Submit</button>
              <button class="ammonite-custom-popup-button-exit" type="button">No Thanks</button>
          </div>
      </form>
      <script type="text/javascript" src="https://ay767.infusionsoft.app/app/webTracking/getTrackingCode"></script>
      <script type="text/javascript" src="https://ay767.infusionsoft.com/resources/external/recaptcha/production/recaptcha.js?b=1.70.0.194774"></script>
      <script src="https://www.google.com/recaptcha/api.js?onload=onloadInfusionRecaptchaCallback&render=explicit" async="async" defer="defer"></script>
      <script type="text/javascript" src="https://ay767.infusionsoft.com/app/timezone/timezoneInputJs?xid=cbbd14525742739291f9d8f0f02d4bbc"></script>
      <div class="">
        <?php echo wp_get_attachment_image( 21, 'medium', false, '' ) ?>
      </div>
    </div>
  </div>
</div>
