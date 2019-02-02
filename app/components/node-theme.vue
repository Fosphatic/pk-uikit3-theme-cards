<template>

    <div class="uk-form-horizontal">

        <template v-if="node.type === 'page'">

            <div class="uk-form-row">
                <span class="uk-form-label">{{ 'Title' | trans }}</span>
                <div class="uk-form-controls uk-form-controls-text">
                    <label><input type="checkbox" v-model="node.theme.title_hide"> {{ 'Hide Title' | trans }}</label>
                </div>
            </div>

            <div class="uk-form-row">
                <span class="uk-form-label">{{ 'Title Size' | trans }}</span>
                <div class="uk-form-controls uk-form-controls-text">
                    <label><input type="checkbox" v-model="node.theme.title_large"> {{ 'Extra large title.' | trans }}</label>
                </div>
            </div>

            <div class="uk-form-row">
                <span class="uk-form-label">{{ 'Alignment' | trans }}</span>
                <div class="uk-form-controls uk-form-controls-text">
                    <label><input type="checkbox" v-model="node.theme.alignment"> {{ 'Center the title and content.' | trans }}</label>
                </div>
            </div>

        </template>

        <div class="uk-form-row">
            <label for="form-class" class="uk-form-label">{{ 'HTML Class' | trans }}</label>
            <div class="uk-form-controls">
                <input id="form-class" class="uk-form-width-large" type="text" v-model="node.theme.html_class">
            </div>
        </div>

        <div class="uk-form-row">
            <span class="uk-form-label">{{ 'Sidebar' | trans }}</span>
            <div class="uk-form-controls uk-form-controls-text">
                <label><input type="checkbox" v-model="node.theme.sidebar_first"> {{ 'Show the sidebar before the content.' | trans }}</label>
            </div>
        </div>

        <div class="uk-form-row">
            <label class="uk-form-label">{{ 'Background Image' | trans }}</label>
            <div class="uk-form-controls uk-form-controls-text">
                <p class="uk-form-controls-condensed">
                    <label><input type="checkbox" v-model="node.theme.contrast_alt"> {{ 'Invert colors' | trans }}</label>
                </p>
                <p class="uk-form-controls-condensed uk-form-width-large"><input-image :source.sync="node.theme.image_alt"></input-image></p>
                <p class="uk-form-help-block">{{ 'Select an alternative image for the page.' | trans }}</p>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-theme-panel" class="uk-form-label">{{ 'Panel Style' | trans }}</label>
            <div class="uk-form-controls">
                <select id="form-theme-background" class="uk-form-width-large" v-model="node.theme.background">
                    <option value="">{{ 'None' | trans }}</option>
                    <option value="uk-card uk-card-default uk-card-body uk-box-shadow-hover-large">{{ 'Default' | trans }}</option>
                    <option value="uk-card uk-card-primary uk-card-body uk-box-shadow-hover-large">{{ 'Primary' | trans }}</option>
                    <option value="uk-card uk-card-secondary uk-card-body uk-box-shadow-hover-large">{{ 'Secondary' | trans }}</option>
                    <option value="uk-card uk-card-hover uk-card-body">{{ 'Muted' | trans }}</option>
                </select>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-theme-panel" class="uk-form-label">{{ 'Container Width' | trans }}</label>
            <div class="uk-form-controls">
                <select id="form-theme-background" class="uk-form-width-large" v-model="node.theme.container_width">
                    <option value="uk-container-xsmall">{{ 'Extra small' | trans }}</option>
                    <option value="uk-container-small">{{ 'Small' | trans }}</option>
                    <option value="">{{ 'Normal' | trans }}</option>
                    <option value="uk-container-large">{{ 'Large' | trans }}</option>
                </select>
            </div>
        </div>

        <div class="uk-form-row">
            <label for="form-theme-panel" class="uk-form-label">{{ 'Blog Panel Style' | trans }}</label>
            <div class="uk-form-controls">
                <select id="form-theme-background" class="uk-form-width-large" v-model="node.theme.blog_background">
                    <option value="">{{ 'None' | trans }}</option>
                    <option value="uk-card uk-card-default uk-card-body uk-box-shadow-hover-large uk-dark">{{ 'Default' | trans }}</option>
                    <option value="uk-card uk-card-primary uk-card-body uk-box-shadow-hover-large uk-light">{{ 'Primary' | trans }}</option>
                    <option value="uk-card uk-card-secondary uk-card-body uk-box-shadow-hover-large uk-light">{{ 'Secondary' | trans }}</option>
                    <option value="uk-card uk-card-hover uk-card-body uk-dark">{{ 'Muted' | trans }}</option>
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

        props: ['node']

    };

    window.Site.components['node-theme'] = module.exports;

</script>
