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
                                <h3 class="card-title">Add Skill Header <router-link to="/skills"><button class="btn btn-success">Go Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" @submit.prevent="addHeader()" >

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="desc">Add Description</label>
                                        <textarea name="desc" id="desc" v-model="form.desc" class="form-control"  placeholder="Add New Description"
                                                  :class="{ 'is-invalid': form.errors.has('desc') }">
                                        </textarea>
                                        <has-error :form="form" field="desc"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="status">Add status(active,inactive)</label>
                                        <input type="text" v-model="form.status" name="status" class="form-control" id="status" placeholder="Add New status"
                                               :class="{ 'is-invalid': form.errors.has('status') }">
                                        <has-error :form="form" field="status"></has-error>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
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
name: "Add",
    data(){
        return{
            form: new Form({
                desc:'',
                status:'',
            })
        }
    },
    methods:{
        addHeader(){
            this.form.post('/skill-header/add')
                .then(()=>{
                    this.$router.push('/skills')
                    toast.fire({
                        type: 'success',
                        title: 'Yah! A New Skill (Header) Added successfully !'
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
