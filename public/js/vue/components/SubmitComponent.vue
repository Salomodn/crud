<template>
    <div class="">
        <!--<div class="form-group" col-sm-6>-->
        <!--<button type="button" style="cursor: pointer" class="btn btn-success col-sm-5" @click="post($event)">{{ action }}-->
        <!--</button>-->
        <!--</div>-->
        <!--<div class="form-group" col-sm-6 id="cancel">-->
        <!--<button type="button" style="cursor: pointer" class="btn btn-primary col-sm-6 btn-danger" @click="clearform($event)">{{-->
        <!--btncancel }}-->
        <!--</button>-->
        <!--</div>-->
        {{output}}
        <div class="from-group">
            <div class="text-right">
                <button class="btn btn-success" type="button"@click="post($event)">{{ action }}</button>
            </div>

        </div>

        
    </div>
</template>

<script type="text/javascript">
    module.exports = {
        mounted: function () {

        },
        /*props:[
            'action',
        ],*/
        props: {
            action: {
                default: "Submit",
                type: String
            },
            btncancel: {
                default: "Reset",
                type: String
            }, info_type: {
                default: "info",
                type: String
            }
        },
        data: function () {
            return {

                btnname: 'Submit 1',
                output: ''


            }
        },
        methods: {
            post: function (e) {
                e.preventDefault();
                let currentObj = this;
                var form = $(e.target).parent().closest('form');
                var url = form.attr('action');
                //var input = JSON.stringify(form.serializeArray());
                var input = form.serialize();

                axios.post(url, input, config)

                    .then(function (response) {

                        currentObj.output = response.data;
                        console.log(currentObj.output);
                        form.trigger('reset'); // clear form
                        var result = response.data;
                        if (result.success) {

                            toastr.success(result.message)
                            toastr.options.timeOut = 3000; // 3s

                        } else {
                            toastr.error(result.message)
                            toastr.options.timeOut = 3000; // 3s
                        }

                    })

                    .catch(function (error) {

                        this.name = error;

                    });
            },
            clearform: function (e) {
                e.preventDefault();
                let currentObj = this;
                //const post = domain + 'clubs';
                var form = $(e.target).parent().closest('form');
                form.trigger('reset');
            }
        }
    }
</script>
<style>
    #cancel {
        padding-left: 3% !important;
    }

</style>
