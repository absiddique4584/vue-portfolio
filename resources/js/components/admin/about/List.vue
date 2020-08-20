<template>
    <div>
        <br>
        <br>
        <br>
        <br>
        <section class="content" >
            <div class="container-fluid">
                <div class="row justify-content-around">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title "><strong>Section About</strong>(Please don't add more than one item)</h4>
                                <div class="card-tools">
                                    <router-link to="/add-about"><button class="btn btn-primary ">Add About</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SI</th>
                                            <th>image</th>
                                            <th>age</th>
                                            <th>site</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>address</th>
                                            <th>city</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(about,index) in getAllAbouts" :key="about.id">
                                            <td>{{index+1}}</td>
                                            <td>
                                                <img :src="ourImage(about.image)" alt="" width="40" height="50">
                                            </td>
                                            <td>{{about.age}}</td>
                                            <td>{{about.site}}</td>
                                            <td>{{about.email}}</td>
                                            <td>{{about.phone}}</td>
                                            <td>{{about.address|sortlength(10,'...')}}</td>
                                            <td>{{about.city}}</td>
                                             <td>
                                                <router-link :to="`/show-about/${about.id}`"><i class="fas fa-eye"></i></router-link>
                                                <router-link :to="`/edit-about/${about.id}`"><i class="fas fa-pencil-alt"></i></router-link>
                                                <a @click.prevent="deleteAbout(about.id)"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
name: "List",
    mounted() {
        this.$store.dispatch('getallAbout')
    },
    computed:{
        getAllAbouts(){
            return this.$store.getters.allAbouts
        }
    },
    methods:{
        ourImage(img){
            return "uploads/about/"+img;
        },
        deleteAbout(id){

            axios.get('/delete-about/'+id)
                .then(()=>{
                    this.$store.dispatch("getallAbout")
                    toast.fire({
                        icon: 'success',
                        title: 'Yah! A About has been successfully Deleted'
                    })
                })

        }
    }
}
</script>

<style scoped>
a{
    cursor: pointer;
}
</style>
