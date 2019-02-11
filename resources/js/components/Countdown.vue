<template>
    <div>
        <div v-if="finished" v-text="expiredText"></div>
        <div v-else>
            <span>{{ remaining.days }} Days, </span>
            <span>{{ remaining.hours }} Hours, </span>
            <span>{{ remaining.minutes }} Minutes, </span>
            <span>{{ remaining.seconds }} Seconds</span>
            left...
        </div>
    </div>
</template>
<script>
    import moment from 'moment';
    export default {
        props: {
            until: String,
            expiredText: { default: 'Now Expired' }
        },
        data () {
            return { now: new Date() };
        },
        mounted () {
            this.refreshEverySecond();
        },
        computed: {
            finished () {
                return this.remaining.total <= 0;
            },
            remaining () {
                let remaining = moment.duration(Date.parse(this.until) - this.now);
                if (remaining <= 0) this.$emit('finished');
                return {
                    total: remaining,
                    days: remaining.days(),
                    hours: remaining.hours(),
                    minutes: remaining.minutes(),
                    seconds: remaining.seconds()
                };
            }
        },
        methods: {
            refreshEverySecond () {
                let interval = setInterval(() => this.now = new Date(), 1000);
                this.$on('finished', () => clearInterval(interval));
            }
        }
    }
</script>