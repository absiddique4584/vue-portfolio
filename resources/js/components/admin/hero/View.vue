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
                                <h3 class="card-title">Add New Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form >

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Add Name</label>
                                        <input readonly type="text" v-model="form.name" name="name" class="form-control" id="name" placeholder="Add New Name"
                                               :class="{ 'is-invalid': form.errors.has('name') }">
                                        <has-error :form="form" field="name"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name_a">Add Name A</label>
                                        <input readonly type="text" v-model="form.name_a" name="name_a" class="form-control" id="name_a" placeholder="Add New Name A"
                                               :class="{ 'is-invalid': form.errors.has('name_a') }">
                                        <has-error :form="form" field="name_a"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name_b">Add Name B</label>
                                        <input readonly type="text" v-model="form.name_b" name="name_b" class="form-control" id="name_b" placeholder="Add New Name B"
                                               :class="{ 'is-invalid': form.errors.has('name_b') }">
                                        <has-error :form="form" field="name_b"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name_c">Add Name C</label>
                                        <input readonly type="text" v-model="form.name_c" name="name_c" class="form-control" id="name_c" placeholder="Add New Name C"
                                               :class="{ 'is-invalid': form.errors.has('name_c') }">
                                        <has-error :form="form" field="name_c"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name_d">Add Name D</label>
                                        <input readonly type="text" v-model="form.name_d" name="name_d" class="form-control" id="name_d" placeholder="Add New Name D">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="twitter">twitter</label>
                                        <input readonly type="text" v-model="form.twitter" name="twitter" class="form-control" id="twitter" placeholder="twitter">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="twitter">facebook</label>
                                        <input readonly type="text" v-model="form.facebook" name="facebook" class="form-control" id="facebook" placeholder="facebook"
                                               :class="{ 'is-invalid': form.errors.has('facebook') }">
                                        <has-error :form="form" field="facebook"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="twitter">instagram</label>
                                        <input readonly type="text" v-model="form.instagram" name="instagram" class="form-control" id="instagram" placeholder="instagram">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="twitter">skype</label>
                                        <input readonly type="text" v-model="form.skype" name="skype" class="form-control" id="skype" placeholder="skype">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="twitter">linkedin</label>
                                        <input readonly type="text" v-model="form.linkedin" name="linkedin" class="form-control" id="linkedin" placeholder="linkedin">
                                    </div>
                                </div>
                                <!-- /.card-body -->


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
name: "View",
    mounted(){
        axios.get(`/view-hero/${this.$route.params.viewID}`)
            .then((response)=>{
                this.form.fill(response.data.hero)
            })
    },
    data(){
        return{
            form:new Form({
                name: '',
                name_a: '',
                name_b: '',
                name_c: '',
                name_d: '',
                twitter: '',
                facebook: '',
                instagram: '',
                skype: '',
                linkedin: '',
            })
        }
    },
    methods:{

    }
}
</script>

<style scoped>

</style>
