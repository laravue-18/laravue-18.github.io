<script type="text/x-template" id="accordion-card-template">
    <div class="accordion-card mb-3" :class="open && 'opened'">
        <div @click="open = !open" class="header py-2 px-3">
            <i class="fas mr-2" :class="open ? ' fa-chevron-circle-up' : ' fa-chevron-circle-down'"></i>
            <slot name="header"></slot>
        </div>

        <div v-if="open" class="border-top p-3">
            <slot name="content"></slot>
        </div>
        
    </div>
</script>
        
<script>
    Vue.component('accordion-card', {
        template: '#accordion-card-template',
        data(){
            return {
                open: false
            }
        },
    })
</script>