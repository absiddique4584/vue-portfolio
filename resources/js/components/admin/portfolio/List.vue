<template>
    <div>
        <section class="content" >
            <div class="container-fluid">
                <div class="row justify-content-around">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title "><strong>Portfolio (Category)</strong></h4>
                                <div class="card-tools">
                                    <router-link to="/add-portfolio"><button class="btn btn-primary ">Add Portfolio</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SI NO</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(category,index) in allData" :key="category.id">
                                            <td>{{index+1}}</td>
                                            <td>{{category.name}}</td>
                                            <td>{{category.slug}}</td>
                                            <td><button class="btn btn-success">{{category.status}}</button></td>
                                            <td>
                                                <router-link :to="`/edit/category/${category.id}`"><i class="fas fa-pencil-alt"></i></router-link>
                                                <a @click.prevent="deleteCategory(category.id)" ><i class="fas fa-trash"></i></a>
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
          this.$store.dispatch('getallCategories')
       },
    computed:{
       allData(){
           return this.$store.getters.allCategories
       }
    },
    methods:{
        deleteCategory(id){
            alert(
                'Are you sure? Want To Delete It!',
                axios.get('/delete-category/'+id)
                    .then(()=>{
                        this.$store.dispatch("getallCategories")
                        toast.fire({
                            icon: 'success',
                            title: 'Yah! A Category has been successfully Deleted'
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
