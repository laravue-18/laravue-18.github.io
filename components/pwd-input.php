<script type="text/x-template" id="pwd-input-template">
    <div class="row mb-3">
        <label class="col-4 col-form-label">{{ label }}</label>
        <div class="col-7">
            <input :type="isHidden?'password':'text'" name="" id="" class="form-control etc-bg-gray" value="">
        </div>
        <div class="col-1">
            <span class="btn-icon">
                <i class="fas" :class="isHidden?'fa-eye':'fa-eye-slash'" 
                    @click="isHidden=!isHidden"
                ></i>
            </span>
        </div>
    </div>
</script>
        
<script>
    Vue.component('pwd-input', {
        template: '#pwd-input-template',
        props: ['label'],
        data(){
            return {
                isHidden: true
            }
        }
    })
</script>