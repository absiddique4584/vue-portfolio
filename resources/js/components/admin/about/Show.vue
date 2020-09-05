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
                                <h3 class="card-title">Hero View Page <router-link to="/abouts"><button class="btn btn-success">Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form >



                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input readonly type="text" v-model="form.title" name="title" class="form-control" id="title"
                                        :class="{ 'is-invalid': form.errors.has('title') }">
                                        <has-error :form="form" field="title"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="birth">Birth Date</label>
                                        <input readonly type="text" v-model="form.birth" name="birth" class="form-control" id="birth"
                                        :class="{ 'is-invalid': form.errors.has('birth') }">
                                        <has-error :form="form" field="birth"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="age"> Age</label>
                                        <input readonly type="text" v-model="form.age" name="age" class="form-control" id="age"
                                        :class="{ 'is-invalid': form.errors.has('age') }">
                                        <has-error :form="form" field="age"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="site">Website</label>
                                        <input readonly type="text" v-model="form.site" name="site" class="form-control" id="site"
                                        :class="{ 'is-invalid': form.errors.has('site') }">
                                        <has-error :form="form" field="site"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input readonly type="text" v-model="form.email" name="email" class="form-control" id="email"
                                        :class="{ 'is-invalid': form.errors.has('email') }">
                                        <has-error :form="form" field="email"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input readonly type="text" v-model="form.phone" name="phone" class="form-control" id="phone"
                                        :class="{ 'is-invalid': form.errors.has('phone') }">
                                        <has-error :form="form" field="phone"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input readonly type="text" v-model="form.address" name="address" class="form-control" id="address"
                                        :class="{ 'is-invalid': form.errors.has('address') }">
                                        <has-error :form="form" field="address"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="degree">Degree</label>
                                        <input readonly type="text" v-model="form.degree" name="degree" class="form-control" id="degree"
                                        :class="{ 'is-invalid': form.errors.has('degree') }">
                                        <has-error :form="form" field="degree"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <input readonly type="text" v-model="form.country" name="country" class="form-control" id="country"
                                        :class="{ 'is-invalid': form.errors.has('country') }">
                                        <has-error :form="form" field="country"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input readonly type="text" v-model="form.city" name="city" class="form-control" id="city"
                                        :class="{ 'is-invalid': form.errors.has('city') }">
                                        <has-error :form="form" field="city"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label >Header Description</label>
                                        <textarea readonly v-model="form.h_desc" name="h_desc" class="form-control" :class="{ 'is-invalid': form.errors.has('h_desc') }">
                                        </textarea>
                                        <has-error :form="form" field="h_desc"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label >Middle Description</label>
                                        <textarea readonly v-model="form.m_desc" name="m_desc" class="form-control" :class="{ 'is-invalid': form.errors.has('m_desc') }">
                                        </textarea>
                                        <has-error :form="form" field="m_desc"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label >Footer Description</label>
                                        <textarea readonly v-model="form.l_desc" name="l_desc" class="form-control" :class="{ 'is-invalid': form.errors.has('l_desc') }">
                                        </textarea>
                                        <has-error :form="form" field="l_desc"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group" style="margin-left: 20px;">
                                        <input @change = "changePhoto($event)" name="image" type="file" readonly :class="{ 'is-invalid': form.errors.has('image') }">
                                        <img :src="updateImage()" alt="" width="80" height="80">
                                        <has-error :form="form" field="image"></has-error>
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
    name: "Show",
    mounted(){
        axios.get(`/show-about/${this.$route.params.showID}`)
            .then((response)=>{
                this.form.fill(response.data.about)
            })
    },

    data(){
        return{
            form:new Form({
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
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href>This File Is Too Much Big</a>'
                })
            }else{
                let reader = new FileReader();
                reader.onload = event => {
                    this.form.image = event.target.result
                    //console.log(event.target.result)
                };
                reader.readAsDataURL(file);
            }

        },
        updateImage(){
            let img = this.form.image;
            if(img.length>100){
                return  this.form.image
            }else{
                return `/uploads/about/${this.form.image}`
            }

        },
    }
}
</script>

<style scoped>

</style>
