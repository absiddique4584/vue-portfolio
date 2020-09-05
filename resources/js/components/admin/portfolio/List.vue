<template>
    <div>
        <section class="content" >
            <div class="container-fluid">
                <div class="row justify-content-around">

                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title "><strong>Portfolio Head</strong></h4>
                                <div class="card-tools">
                                    <router-link to="/add-portfolio/head"><button class="btn btn-primary ">Add Portfolio(Head)</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SI NO</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(portfoliohead,index) in allPortfoliohead" :key="portfoliohead.id">
                                            <td>{{index+1}}</td>
                                            <td>{{portfoliohead.desc}}</td>
                                            <td><button class="btn btn-success">{{portfoliohead.status}}</button></td>
                                            <td>
                                                <router-link :to="`/edit/portfoliohead/${portfoliohead.id}`"><i class="fas fa-pencil-alt"></i></router-link>
                                                <a  @click.prevent="deletePortfoliohead(portfoliohead.id)"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title "><strong>Portfolio (Category)</strong></h4>
                                <div class="card-tools">
                                    <router-link to="/add-category"><button class="btn btn-primary ">Add Category</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
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

                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title "><strong>Portfolio (Body)</strong></h4>
                                <div class="card-tools">
                                    <router-link to="/add-portfolio"><button class="btn btn-primary ">Add Portfolio</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table  class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SI NO</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(portfolio,index) in allPortfolio" :key="portfolio.id">
                                            <td>{{index+1}}</td>
                                            <td v-if="portfolio.category">{{portfolio.category.name}}</td>
                                            <td>{{portfolio.title|sortlength(20,'...')}}</td>
                                            <td>
                                                <img :src="ourImage(portfolio.image)" alt="" width="40" height="50">
                                            </td>
                                            <td><button class="btn btn-success">{{portfolio.status}}</button></td>
                                            <td>
                                                <router-link :to="`/edit/portfolio/${portfolio.id}`"><i class="fas fa-pencil-alt"></i></router-link>
                                                <a @click.prevent="deletePortfolio(portfolio.id)" ><i class="fas fa-trash"></i></a>
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
          this.$store.dispatch('getallPortfolio')
          this.$store.dispatch('getportfoliohead')
       },
    computed:{
       allData(){
           return this.$store.getters.allCategories
       },
       allPortfolio(){
           return this.$store.getters.getPortfolio
       },
       allPortfoliohead(){
           return this.$store.getters.getPortfoliohead
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
        },
        deletePortfolio(id){
            alert(
                'Are you sure? Want To Delete It!',
                axios.get('/delete-portfolio/'+id)
                    .then(()=>{
                        this.$store.dispatch("getallPortfolio")
                        toast.fire({
                            icon: 'success',
                            title: 'Yah! A Portfoliohead has been successfully Deleted'
                        })
                    }).catch(()=>{
                    toast.fire({
                        icon: 'success',
                        title: 'Ooh!something Wrong !'
                    })
                })
            )
        },
        deletePortfoliohead(id){
            alert(
                'Are you sure? Want To Delete It!',
                axios.get('/delete-portfoliohead/'+id)
                    .then(()=>{
                        this.$store.dispatch("getportfoliohead")
                        toast.fire({
                            icon: 'success',
                            title: 'Yah! A Portfolio has been successfully Deleted'
                        })
                    }).catch(()=>{
                    toast.fire({
                        icon: 'success',
                        title: 'Ooh!something Wrong !'
                    })
                })
            )
        },
        ourImage(img){
            return "uploads/portfolio/"+img;
        },
    }
}
</script>

<style scoped>
a{
    cursor: pointer;
}
</style>
