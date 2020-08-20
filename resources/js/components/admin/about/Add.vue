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
                                <h3 class="card-title">Add New About <router-link to="/abouts"><button class="btn btn-success">Go Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" @submit.prevent="addAbout()" enctype="multipart/form-data">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label >Image</label>
                                        <input @change = "changePhoto($event)" name="image" type="file" :class="{ 'is-invalid': form.errors.has('image') }">
                                        <img :src="form.image" alt="" width="80" height="80">
                                        <has-error :form="form" field="image"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input  type="text" v-model="form.title" name="title" class="form-control" id="title" placeholder="Add Title"
                                               :class="{ 'is-invalid': form.errors.has('title') }">
                                        <has-error :form="form" field="title"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="birth">Birth Date</label>
                                        <input  type="text" v-model="form.birth" name="birth" class="form-control" id="birth" placeholder="Add Birthdate"
                                               :class="{ 'is-invalid': form.errors.has('birth') }">
                                        <has-error :form="form" field="birth"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="age"> Age</label>
                                        <input  type="text" v-model="form.age" name="age" class="form-control" id="age" placeholder="Add Age"
                                               :class="{ 'is-invalid': form.errors.has('age') }">
                                        <has-error :form="form" field="age"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="site">Website</label>
                                        <input  type="text" v-model="form.site" name="site" class="form-control" id="site" placeholder="Add Website"
                                               :class="{ 'is-invalid': form.errors.has('site') }">
                                        <has-error :form="form" field="site"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input  type="text" v-model="form.email" name="email" class="form-control" id="email" placeholder="Add Email"
                                               :class="{ 'is-invalid': form.errors.has('email') }">
                                        <has-error :form="form" field="email"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input  type="text" v-model="form.phone" name="phone" class="form-control" id="phone" placeholder="Add Phone"
                                               :class="{ 'is-invalid': form.errors.has('phone') }">
                                        <has-error :form="form" field="phone"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input  type="text" v-model="form.address" name="address" class="form-control" id="address" placeholder="Add Address"
                                               :class="{ 'is-invalid': form.errors.has('address') }">
                                        <has-error :form="form" field="address"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="degree">Education Qualification</label>
                                        <input  type="text" v-model="form.degree" name="degree" class="form-control" id="degree" placeholder="Add Education Qualification"
                                               :class="{ 'is-invalid': form.errors.has('degree') }">
                                        <has-error :form="form" field="degree"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="country">Country Name</label>
                                        <input  type="text" v-model="form.country" name="country" class="form-control" id="country" placeholder="Add country"
                                               :class="{ 'is-invalid': form.errors.has('country') }">
                                        <has-error :form="form" field="country"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input  type="text" v-model="form.city" name="city" class="form-control" id="city" placeholder="Add City"
                                               :class="{ 'is-invalid': form.errors.has('city') }">
                                        <has-error :form="form" field="city"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="h_desc">Header Description</label>
                                        <input  type="text" v-model="form.h_desc" name="h_desc" class="form-control" id="h_desc" placeholder="Add Header Description"
                                               :class="{ 'is-invalid': form.errors.has('h_desc') }">
                                        <has-error :form="form" field="h_desc"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="m_desc">Middle Description</label>
                                        <input  type="text" v-model="form.m_desc" name="m_desc" class="form-control" id="m_desc" placeholder="Add Middle Description"
                                               :class="{ 'is-invalid': form.errors.has('m_desc') }">
                                        <has-error :form="form" field="m_desc"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="l_desc">Footer Description</label>
                                        <input  type="text" v-model="form.l_desc" name="l_desc" class="form-control" id="l_desc" placeholder="Add Footer Description"
                                               :class="{ 'is-invalid': form.errors.has('l_desc') }">
                                        <has-error :form="form" field="l_desc"></has-error>
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
                image:'',
                title:'',
                birth:'',
                age:'',
                site:'',
                email:'',
                phone:'',
                address:'',
                degree:'',
                country:'',
                city:'',
                h_desc:'',
                m_desc:'',
                l_desc:'',
            })
        }
    },
    methods:{
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
        addAbout(){
            this.form.post('/about/add')
                .then(()=>{
                    this.$router.push('/abouts')
                    toast.fire({
                        type: 'success',
                        title: 'A New About Added successfully'
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
