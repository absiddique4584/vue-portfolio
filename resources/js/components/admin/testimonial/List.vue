<template>
    <div>
        <section class="content" >
            <div class="container-fluid">
                <div class="row justify-content-around">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title "><strong>Section Testimonial</strong></h4>
                                <div class="card-tools">
                                    <router-link to="/add-testimonial"><button class="btn btn-primary ">Add Testimonial</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SI NO</th>
                                            <th>photo</th>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(testimonial,index) in allTestimomial" :key="testimonial.id">
                                            <td>{{index+1}}</td>
                                            <td>
                                                <img :src="ourImage(testimonial.photo)" alt="" width="40" height="50">
                                            </td>
                                            <td>{{testimonial.name}}</td>
                                            <td>{{testimonial.title}}</td>
                                            <td>{{testimonial.desc|sortlength(20,'....')}}</td>
                                            <td><button class="btn btn-success">{{testimonial.status}}</button></td>
                                            <td>
                                                <router-link :to="`/edit-testimonial/${testimonial.id}`"><i class="fas fa-pencil-alt"></i></router-link>
                                                <a @click.prevent="deleteTestimonial(testimonial.id)"><i class="fas fa-trash"></i></a>
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
    mounted(){
    this.$store.dispatch('getAllTestimonials')
    },
    computed:{
    allTestimomial(){
        return this.$store.getters.allTestimoni
    }
    },
    methods:{
        ourImage(img){
            return "uploads/testimonial/"+img;
        },
        deleteTestimonial(id){

           axios.get('/delete-testimonial/'+id)
               .then(()=>{
                   this.$store.dispatch("getAllTestimonials")
                   toast.fire({
                       icon: 'success',
                       title: 'Yah! A Testimonial has been successfully Deleted'
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
