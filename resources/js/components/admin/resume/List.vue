<template>
    <div>
        <section class="content" >
            <div class="container-fluid">

                <div class="row justify-content-around">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title "><strong> Resume(Head)</strong></h3>
                                <div class="card-tools">
                                    <router-link to="/resume-head/add"><button class="btn btn-primary ">Add Resume(Head)</button></router-link>
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
                                        <tr v-for="(resume,index) in resumeHead" :key="resume.id">
                                            <td>{{index+1}}</td>
                                            <td>{{resume.desc}}</td>
                                            <td><button class="btn btn-success">{{resume.status}}</button></td>
                                            <td>
                                                <router-link :to="`/resume/head/edit/${resume.id}`"  ><i class="fas fa-pencil-alt"></i></router-link>
                                                <a @click.prevent="deleteResume(resume.id)" ><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div><div class="row justify-content-around">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title "><strong> Resume(Education)</strong></h3>
                                <div class="card-tools">
                                    <router-link to="/add-education"><button class="btn btn-primary ">Add Education</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table  class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SI NO</th>
                                            <th>Degree</th>
                                            <th>Year</th>
                                            <th>University</th>
                                            <th>skill</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(education,index) in allEducations" :key="education.id">
                                            <td>{{ index+1 }}</td>
                                            <td>{{education.degree|sortlength(10,'...')}}</td>
                                            <td>{{education.year}}</td>
                                            <td>{{education.versity|sortlength(10,'...')}}</td>
                                            <td>{{education.skill|sortlength(10,'...')}}</td>
                                            <td><button class="btn btn-success">{{education.status}}</button></td>
                                            <td>
                                                <router-link :to="`/resume/education/show/${education.id}`" ><i class="fas fa-eye"></i></router-link>
                                                <router-link :to="`/resume/education/edit/${education.id}`"  ><i class="fas fa-pencil-alt"></i></router-link>
                                                <a @click.prevent="deleteEducation(education.id)"><i class="fas fa-trash"></i></a>
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
                                <h3 class="card-title "><strong>Resume(Experience)</strong></h3>
                                <div class="card-tools">
                                    <router-link to="/add-experience"><button class="btn btn-primary ">Add Experience</button></router-link>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SI NO</th>
                                            <th>Rank</th>
                                            <th>Year</th>
                                            <th>Work Place</th>
                                            <th>work1</th>
                                            <th>work2</th>
                                            <th>work3</th>
                                            <th>work4</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(experience,index) in allExperiences" :key="experience.id">
                                            <td>{{ index+1 }}</td>
                                            <td>{{experience.rank|sortlength(10,'...')}}</td>
                                            <td>{{experience.year}}</td>
                                            <td>{{experience.work_place|sortlength(10,'...')}}</td>
                                            <td>{{experience.work1|sortlength(10,'...')}}</td>
                                            <td>{{experience.work2|sortlength(10,'...')}}</td>
                                            <td>{{experience.work3|sortlength(10,'...')}}</td>
                                            <td>{{experience.work4|sortlength(10,'...')}}</td>
                                            <td><button class="btn btn-success">{{experience.status}}</button></td>
                                            <td>
                                                <router-link :to="`/resume/experience/show/${experience.id}`" ><i class="fas fa-eye"></i></router-link>
                                                <router-link :to="`/resume/experience/edit/${experience.id}`" ><i class="fas fa-pencil-alt"></i></router-link>
                                                <a @click.prevent="deleteExperience(experience.id)"><i class="fas fa-trash"></i></a>
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
        this.$store.dispatch('getallResumehead')
        this.$store.dispatch('getallEducations')
        this.$store.dispatch('getallExperiences')
    },
    computed:{
        resumeHead(){
            return this.$store.getters.AllResumehead
        },
        allEducations(){
            return this.$store.getters.AllEducation
        },
        allExperiences(){
            return this.$store.getters.AllExperience
        }

    },
    methods:{
        deleteEducation(id){
            axios.get('/education-delete/'+id)
                .then(()=>{
                    this.$store.dispatch("getallEducations")
                    toast.fire({
                        icon: 'success',
                        title: 'Yah! A Education has been successfully Deleted'
                    })
                })

        },
        deleteExperience(id){
            axios.get('/experience-delete/'+id)
                .then(()=>{
                    this.$store.dispatch("getallExperiences")
                    toast.fire({
                        icon: 'success',
                        title: 'Yah! A Experience has been successfully Deleted'
                    })
                })

        },
        deleteResume(id){
            axios.get('/resumehead-delete/'+id)
                .then(()=>{
                    this.$store.dispatch("getallResumehead")
                    toast.fire({
                        icon: 'success',
                        title: 'Yah! A Resume has been successfully Deleted'
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
