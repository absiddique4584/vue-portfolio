<template>
    <div>
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-around">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update Resume Header <router-link to="/resumes"><button class="btn btn-success">Go Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" @submit.prevent="updateHeader()" >

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="desc">Update Description</label>
                                        <textarea name="desc" id="desc" v-model="form.desc" class="form-control"
                                                  :class="{ 'is-invalid': form.errors.has('desc') }">
                                        </textarea>
                                        <has-error :form="form" field="desc"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="status">Update status(active,inactive)</label>
                                        <input type="text" v-model="form.status" name="status" class="form-control" id="status"
                                               :class="{ 'is-invalid': form.errors.has('status') }">
                                        <has-error :form="form" field="status"></has-error>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
name: "edit",
    data(){
        return{
            form: new Form({
                desc:'',
                status:'',
            })
        }
    },

    mounted() {
        axios.get(`/edit-resumeHeader/${this.$route.params.resumeheadId}`)
            .then((response)=>{
                this.form.fill(response.data.resumeHead)
            })
    },
    methods:{
        updateHeader(){
            this.form.post(`/update-resumehead/${this.$route.params.resumeheadId}`)
                .then((response)=>{
                    this.$router.push('/resumes')

                    toast.fire({
                        icon: 'success',
                        title: 'Yah! Resume(Header) successfully Updated !'
                    })
                })
                .catch(()=>{

                })
        }
    }

}
</script>

<style scoped>

</style>
