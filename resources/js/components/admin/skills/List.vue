<template>
    <div>
        <section class="content" >
            <div class="container-fluid">
                <div class="row justify-content-around">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title "><strong>Section Skills</strong></h3>
                                <div class="card-tools">
                                    <router-link to="/add-skill"><button class="btn btn-primary ">Add Skill</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SI NO</th>
                                            <th>Name</th>
                                            <th>Percent</th>
                                            <th>Value</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(skills,index) in allSkills" :key="skills.id">
                                            <td>{{index+1}}</td>
                                            <td>{{skills.name}}</td>
                                            <td>{{skills.percent}}</td>
                                            <td>{{skills.value}}</td>
                                            <td><button class="btn btn-success">{{skills.status}}</button></td>
                                            <td>
                                                <router-link :to="`/edit-skill/${skills.id}`" ><i class="fas fa-pencil-alt"></i></router-link>
                                                <a @click.prevent="deleteSkill(skills.id)"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>


                <div class="row justify-content-around">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title "><strong>Section Skills2</strong></h3>
                                <div class="card-tools">
                                    <router-link to="/add-skill2"><button class="btn btn-primary ">Add Skill2</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SI NO</th>
                                            <th>Name</th>
                                            <th>Percent</th>
                                            <th>Value</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(skills2,index) in allSkills2" :key="skills2.id">
                                            <td>{{index+1}}</td>
                                            <td>{{skills2.name}}</td>
                                            <td>{{skills2.percent}}</td>
                                            <td>{{skills2.value}}</td>
                                            <td><button class="btn btn-success">{{skills2.status}}</button></td>
                                            <td>
                                                <router-link :to="`/edit-skill2/${skills2.id}`" ><i class="fas fa-pencil-alt"></i></router-link>
                                                <a @click.prevent="deleteSkill2(skills2.id)"><i class="fas fa-trash"></i></a>
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
       this.$store.dispatch('getallSkills')
       this.$store.dispatch('getallSkills2')
    },
    computed:{
        allSkills(){
            return this.$store.getters.AllSkills
        },
        allSkills2(){
            return this.$store.getters.AllSkills2
        },

    },
    methods:{
        deleteSkill(id){
            axios.get('/delete-skill/'+id)
                .then(()=>{
                    this.$store.dispatch("getallSkills")
                    toast.fire({
                        icon: 'success',
                        title: 'Yah! A Skill has been successfully Deleted'
                    })
                })
        },
        deleteSkill2(id){
            axios.get('/delete-skill2/'+id)
                .then(()=>{
                    this.$store.dispatch("getallSkills2")
                    toast.fire({
                        icon: 'success',
                        title: 'Yah! A Skill2 has been successfully Deleted'
                    })
                })
        }
    },

}
</script>

<style scoped>
a{
    cursor: pointer;
}
</style>
