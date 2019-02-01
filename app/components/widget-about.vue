<template>

  <div class="uk-form uk-form-horizontal">
    <h1>{{ 'UIkit 3 Cards Theme' | trans }}</h1>

    <div class="uk-form-row">
      <label class="uk-form-label">{{ 'Ported by' | trans }}</label>
      <div class="uk-form-controls uk-form-controls-text">
          <div class="uk-panel uk-panel-box">
            <img class="uk-align-center" src='https://www.suchan.me/storage/logo.svg' />
            <a class="uk-button uk-width-1-1 uk-button-large" href="https://www.suchan-webdesign.de"
               target="_blank">Homepage</a>
          </div>
      </div>
    </div>

    <div class="uk-form-row">
        <label class="uk-form-label">{{ 'Getting help' | trans }}</label>
        <div class="uk-form-controls uk-form-controls-text">
            <div class="uk-panel uk-panel-box">
                <p>{{ 'You have problems using this Theme? Join the Pagekit community forum.' | trans }}</p>
                <a class="uk-button uk-width-1-1 uk-button-large" href="https://pagekit-forum.org"
                   target="_blank">Pagekit Forum</a>
            </div>
        </div>
    </div>
    <div class="uk-form-row">
      <label class="uk-form-label">{{ 'Donate' | trans }}</label>
      <div class="uk-form-controls uk-form-controls-text">
          <div class="uk-panel uk-panel-box">
              <p>{{ 'Do you like my work? It is free to use, to modify and extend it your own needs. If you like it you are welcome to make a donation for further support and additional ports.' | trans }} </p>
              <a class="uk-button uk-button-large uk-width-1-1 uk-button-primary"
                 href="https://www.paypal.me/svensuchan" target="_blank">{{ 'Donate' | trans }}</a>
          </div>
      </div>
    </div>
  </div>

</template>

<script>

    module.exports = {

        section: {
            label: 'About',
            priority: 90
        },

        props: ['widget', 'config']

    };

    window.Widgets.components['widget-about'] = module.exports;

</script>
