<template>
    <div>
        <section class="content" >
            <div class="container-fluid">
                <div class="row justify-content-around">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title "><strong>Section Hero<span style="color: #e83e8c;"><u>(Background Image)</u></span></strong></h4>
                                <p>(Please don't add more than one item)</p>
                                <div class="card-tools">
                                    <router-link to="/add-background"><button class="btn btn-primary ">Add Background</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table  class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SI NO</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(back,index) in getAllbackground" :key="back.id">
                                            <td>{{index+1}}</td>
                                            <td>
                                                <img :src="ourImage(back.image)" alt="" width="140" height="90">
                                            </td>
                                            <td><button class="btn btn-success">{{ back.status }}</button></td>
                                            <td>
                                                <router-link :to="`/edit-background/${back.id}`"><i class="fas fa-pencil-alt"></i></router-link>
                                                <a @click.prevent="deleteBackground(back.id)"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>

                    <hr>

                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title "><strong>Section Hero</strong>(Please don't add more than one item)</h4>
                                <div class="card-tools">
                                    <router-link to="/add-hero"><button class="btn btn-primary ">Add Hero</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table  class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SI NO</th>
                                            <th>Name</th>
                                            <th>A</th>
                                            <th>B</th>
                                            <th>C</th>
                                            <th>D</th>
                                            <th>twitter</th>
                                            <th>facebook</th>
                                            <th>instagram</th>
                                            <th>skype</th>
                                            <th>linkedin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(hero,index) in getAllHeroes" :key="hero.id" >
                                            <td>{{index+1}}</td>
                                            <td>{{hero.name|sortlength(7,'...')}}</td>
                                            <td>{{hero.name_a|sortlength(7,'...')}}</td>
                                            <td>{{hero.name_b|sortlength(7,'...')}}</td>
                                            <td>{{hero.name_c|sortlength(7,'...')}}</td>
                                            <td>{{hero.name_d|sortlength(7,'...')}}</td>
                                            <td><button class="btn btn-primary "><a class="white-color" :href="hero.twitter">click</a></button></td>
                                            <td><button class="btn btn-primary"><a class="white-color"  :href="hero.facebook">click</a></button></td>
                                            <td><button class="btn btn-primary"><a class="white-color"  :href="hero.instagram">click</a></button></td>
                                            <td><button class="btn btn-primary"><a class="white-color"  :href="hero.skype">click</a></button></td>
                                            <td><button class="btn btn-primary"><a class="white-color"  :href="hero.linkedin">click</a></button></td>
                                            <td>
                                                <router-link :to="`/view-hero/${hero.id}`"><i class="fas fa-eye"></i></router-link>
                                                <router-link :to="`/edit-hero/${hero.id}`"><i class="fas fa-pencil-alt"></i></router-link>
                                                <a @click.prevent="deleteHero(hero.id)"><i class="fas fa-trash"></i></a>
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
        this.$store.dispatch('allHero')
        this.$store.dispatch('getBackground')
    },
    computed:{
        getAllHeroes(){
            return this.$store.getters.allHeroes
        },
        getAllbackground(){
            return this.$store.getters.allBackground
        }
    },
    methods:{
        deleteHero(id){
            axios.get('/heroDelete/'+id)
                .then(()=>{
                    this.$store.dispatch("allHero")
                    toast.fire({
                        icon: 'success',
                        title: 'Yah! A Heroes has been successfully Deleted'
                    })
                })
        },
        ourImage(img){
            return "uploads/background/"+img;
        },
        deleteBackground(id){
            axios.get('/background-delete/'+id)
                .then(()=>{
                    this.$store.dispatch("getBackground")
                    toast.fire({
                        icon: 'success',
                        title: 'Yah! A Background has been successfully Deleted'
                    })
                })
        }
    }

}
</script>

<style scoped>
.white-color{
    color: #ffffff;
}
a{
    cursor: pointer;
}

</style>
