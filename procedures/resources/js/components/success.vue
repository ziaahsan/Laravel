<template>
    <div class="alert alert-success">
        <p class="uk-margin-remove uk-text-small uk-text-center">
            <span class="uk-text-success">{{title}}</span>
            <br/>
            <span>Redirecting in <b>{{ timerCount }}</b> seconds!</span>
        </p>
    </div>
</template>
<script>
    export default {
        props: ['title'],
        data() {
            return {
                timerCount: 3
            }
        },
        // @Todo: Change this or the watch (I have a feeling) will leak...
        // @Note: Redirect should destroy the watch but bad practice.. use react like-unmount here.
        watch: {
            timerCount: {
                handler(value) {
                    if (value > 0) {
                        setTimeout(() => {
                            this.timerCount--;
                        }, 1000);
                    } else {
                        window.location = '/';
                    }
                },
                // The watcher is triggered upon creation
                immediate: true
            }
        }
    }
</script>