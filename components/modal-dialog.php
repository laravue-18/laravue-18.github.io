<script type="text/x-template" id="modal-dialog-template">
    <div>
        <div v-show="show" class="modal-card">
            <span @click="$emit('close')" style="position:absolute; cursor: pointer; top: 1rem; right: 1rem;">✖</span>
            <slot></slot>
        </div>
        <div class="overlay" v-show="show"></div>
    </div>
</script>
        
<script>
    Vue.component('modal-dialog', {
        template: '#modal-dialog-template',
        props: ['show'],
        data(){
            return {
            }
        },
        methods: {
            closeModal(){
                console.log('closed')
                this.$emit('myEvent');
            }
        }
    })
</script>