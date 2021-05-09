<template>
    <div>
        <ul class="uk-list">
            <li class="uk-box-shadow-small uk-background-default uk-padding-small"
                style="border-radius: 6px;"
                v-for="item in items" :key="item.id">
                <h4 class="uk-margin-remove">{{item.title}}</h4>
                <p class="uk-margin-remove uk-text-small">{{item.message}}</p>
                <div>
                    <span class="uk-text-small"><span class="uk-badge cu-badge-priority"></span>Normal</span>
                    &middot;
                    <span class="uk-text-small">{{item.created_at}}</span>
                </div>
                <div class="uk-margin-small-top uk-text-center">
                    <a class="uk-link uk-text-small" href="#">Show Procedure</a>
                </div>
            </li>
        </ul>
    </div>
</template>
<script>
    export default {
        props : ['items']
    }
</script>
