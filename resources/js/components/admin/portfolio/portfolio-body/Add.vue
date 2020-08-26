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
                                <h3 class="card-title">Add New Portfolio <router-link to="/portfolio"><button class="btn btn-success">Go Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" @submit.prevent="addProfile()">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Select Category</label>
                                        <select class="form-control" :class="{ 'is-invalid': form.errors.has('category_id') }" v-model="form.category_id">
                                            <option disabled value="">Select One</option>
                                            <option :value="category.id" v-for="category in allData"> {{category.name}}</option>
                                        </select>
                                        <has-error :form="form" field="category_id"></has-error>
                                    </div>
                                </div>


                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Add Title</label>
                                        <input type="text" v-model="form.title" name="title" class="form-control" id="title" placeholder="Add New Title"
                                               :class="{ 'is-invalid': form.errors.has('title') }">
                                        <has-error :form="form" field="title"></has-error>
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

                                <div class="card-body">
                                    <div class="form-group">
                                        <input @change = "changePhoto($event)" name="image" type="file" :class="{ 'is-invalid': form.errors.has('image') }">
                                        <img :src="form.image" alt="" width="80" height="80">
                                        <has-error :form="form" field="image"></has-error>
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
            form:new Form({
                category_id:'',
                title:'',
                image:'',
                status:'',
            })
        }
    },
    mounted() {
        this.$store.dispatch('getallCategories')
    },
    computed:{
        allData(){
            return this.$store.getters.allCategories
        }
    },
    methods:{
        addProfile(){
            this.form.post('/add-profile')
                .then(( response ) => {
                    //console.log(response.data)
                    this.$router.push('/portfolio')
                    toast.fire({
                        icon: 'success',
                        title: 'Yah! A portfolio Has Been successfully Added'
                    })
                }).catch(()=>{

            })
        },
        changePhoto(event){
            let file = event.target.files[0];

            if(file.size>1048576){
                swal.fire({
                    type: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href>This File Is Too Much Big</a>'
                })
            }else{
                let reader = new FileReader();
                reader.onload = event => {
                    this.form.image = event.target.result
                    console.log(event.target.result)
                };
                reader.readAsDataURL(file);
            }
        },
    }
}
</script>

<style scoped>

</style>
