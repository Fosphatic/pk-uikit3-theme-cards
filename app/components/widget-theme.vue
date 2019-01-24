<template>

    <div class="uk-form-horizontal">

        <div class="uk-form-row">
            <span class="uk-form-label">{{ 'Title' | trans }}</span>
            <div class="uk-form-controls uk-form-controls-text">
                <label><input type="checkbox" v-model="widget.theme.title_hide"> {{ 'Hide Title' | trans }}</label>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-theme-title-size" class="uk-form-label">{{ 'Title Size' | trans }}</label>
            <div class="uk-form-controls">
                <select id="form-theme-title-size" class="uk-form-width-large" v-model="widget.theme.title_size">
                    <option value="uk-panel-title">{{ 'Default' | trans }}</option>
                    <option value="uk-h1 uk-margin-remove-top">{{ 'H1' | trans }}</option>
                    <option value="uk-h2 uk-margin-remove-top">{{ 'H2' | trans }}</option>
                    <option value="uk-h3 uk-margin-remove-top">{{ 'H3' | trans }}</option>
                    <option value="uk-h4 uk-margin-remove-top">{{ 'H4' | trans }}</option>
                    <option value="uk-heading-large uk-margin-remove-top">Extra Large</option>
                </select>
            </div>
        </div>

        <div class="uk-form-row">
            <span class="uk-form-label">{{ 'Alignment' | trans }}</span>
            <div class="uk-form-controls uk-form-controls-text">
                <label><input type="checkbox" v-model="widget.theme.alignment"> {{ 'Center the title and content.' | trans }}</label>
            </div>
        </div>

        <div class="uk-form-row">
            <span class="uk-form-label">{{ 'Sidebar' | trans }}</span>
            <div class="uk-form-controls uk-form-controls-text">
                <label><input type="checkbox" v-model="widget.theme.sidebar_margin"> {{ 'Set sidebar margin.' | trans }}</label>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-theme-badge" class="uk-form-label">{{ 'HTML Class' | trans }}</label>
            <div class="uk-form-controls">
                <input id="form-theme-badge" class="uk-form-width-large" type="text" v-model="widget.theme.html_class">
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-theme-panel" class="uk-form-label">{{ 'Panel Style' | trans }}</label>
            <div class="uk-form-controls">
                <select id="form-theme-panel" class="uk-form-width-large" v-model="widget.theme.panel">
                    <option value="">{{ 'None' | json }}</option>
                    <option value="uk-card uk-card-default uk-card-body uk-box-shadow-hover-large">{{ 'Default' | trans }}</option>
                    <option value="uk-card uk-card-primary uk-card-body uk-box-shadow-hover-large">{{ 'Primary' | trans }}</option>
                    <option value="uk-card uk-card-secondary uk-card-body uk-box-shadow-hover-large">{{ 'Secondary' | trans }}</option>
                    <option value="uk-card uk-card-hover uk-card-body">{{ 'Muted' | trans }}</option>
                </select>
            </div>
        </div>

    </div>

</template>

<script>

    module.exports = {

        section: {
            label: 'Theme',
            priority: 90
        },

        props: ['widget', 'config']

    };

    window.Widgets.components['theme'] = module.exports;

</script>
