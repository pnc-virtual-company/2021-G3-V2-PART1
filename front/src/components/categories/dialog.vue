<template> 
    <section>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" v-show="show" gitrole="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle" v-text="title"></h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" @click="cancel" class="btn btn-secondary" data-dismiss="modal">Consel</button>
                        <button type="button" @click="confirm" class="btn btn-primary">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</template>

<script>
export default {
    props: ['show','title','cancel','confirm']
}
</script>

<style>

</style>