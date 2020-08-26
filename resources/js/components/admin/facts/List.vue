<template>
    <div>
        <section class="content" >
            <div class="container-fluid">
                <div class="row justify-content-around">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title "><strong>Section Facts </strong>(Header)</h3>
                                <div class="card-tools">
                                    <router-link to="/add-fact/header"><button class="btn btn-primary ">Add Header</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table  class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SI NO</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(factheader,index) in getFactheader" :key="factheader.id">
                                            <td>{{index+1}}</td>
                                            <td>{{factheader.desc}}</td>
                                            <td><button class="btn btn-success">{{factheader.status}}</button></td>
                                            <td>
                                                <router-link :to="`/factHeader-edit/${factheader.id}`"><i class="fas fa-pencil-alt"></i></router-link>
                                                <a @click.prevent="deleteHeader(factheader.id)"><i class="fas fa-trash"></i></a>
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
                                <h3 class="card-title "><strong>Section Facts (active items should be 4 or 8)</strong></h3>
                                <div class="card-tools">
                                    <router-link to="/add-fact"><button class="btn btn-primary ">Add Fact</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SI NO</th>
                                            <th>Icon</th>
                                            <th>Number</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(fact,index) in getFact" :key="fact.id">
                                            <td>{{ index+1 }}</td>
                                            <td>{{ fact.icon }}</td>
                                            <td>{{ fact.number }}</td>
                                            <td>{{ fact.name }}</td>
                                            <td><button class="btn btn-success" >{{ fact.status }}</button></td>
                                            <td>
                                                <router-link :to="`/fact-view/${fact.id}`" ><i class="fas fa-eye"></i></router-link>
                                                <router-link :to="`/fact-edit/${fact.id}`"><i class="fas fa-pencil-alt"></i></router-link>
                                                <a @click.prevent="deleteFact(fact.id)"><i class="fas fa-trash"></i></a>
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
       this.$store.dispatch('getallFacts')
        this.$store.dispatch('getallFactheader')
    },
    computed:{
        getFact(){
            return this.$store.getters.allFacts
        },
        getFactheader(){
            return this.$store.getters.allfactHeader
        }
    },
    methods:{
        deleteFact(id){
            axios.get('/delete-fact/'+id)
            .then(()=>{
                this.$store.dispatch('getallFacts')
                toast.fire({
                    icon: 'success',
                    title: 'Yah! A Fact has been successfully Deleted'
                })
            })
        },
        deleteHeader(id){
            axios.get('/delete-header/'+id)
            .then(()=>{
                this.$store.dispatch('getallFactheader')
                toast.fire({
                    icon: 'success',
                    title: 'Yah! A Fact(Header) has been successfully Deleted'
                })
            })
        },

    }
}
</script>

<style scoped>
a{
    cursor: pointer;
}
</style>
