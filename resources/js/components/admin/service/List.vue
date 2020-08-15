<template>
    <div>
        <section class="content" >
            <div class="container-fluid">
                <div class="row justify-content-around">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title "><strong>Section Service</strong></h4>
                                <div class="card-tools">
                                    <router-link to="/add-service"><button class="btn btn-primary ">Add Service</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SI NO</th>
                                            <th>Icon</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(service,index) in getAllService" :key="service.id">
                                            <td>{{ index+1 }}</td>
                                            <td>{{ service.icon }}</td>
                                            <td>{{ service.name }}</td>
                                            <td>{{ service.desc|sortlength(20,'....') }}</td>
                                            <td><button class="btn btn-success">{{ service.status }}</button></td>
                                            <td>
                                                <router-link :to="`/edit-service/${service.id}`"><i class="fas fa-pencil-alt"></i></router-link>
                                                <a @click.prevent="deleteService(service.id)"><i class="fas fa-trash"></i></a>
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
        this.$store.dispatch('allService')
    },
    computed:{
        getAllService(){
            return this.$store.getters.getServices
        }
    },

    methods:{
        deleteService(id){
           alert(
               'Are you sure? Want To Delet It!',
               axios.get('/delete-service/'+id)
                   .then(()=>{
                       this.$store.dispatch("allService")
                       toast.fire({
                           icon: 'success',
                           title: 'Yah! A Service has been successfully Deleted'
                       })
                   }).catch(()=>{
                   toast.fire({
                       icon: 'success',
                       title: 'Ooh!something Wrong !'
                   })
               })
           )
        }

    }
}
</script>

<style scoped>
a{
    cursor: pointer;
}
</style>
