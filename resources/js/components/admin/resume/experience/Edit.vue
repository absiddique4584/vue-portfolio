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
                                <h3 class="card-title">Resume(Education) View Page <router-link to="/resumes"><button class="btn btn-success">Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form @submit.prevent="updateExperience()">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="rank">Rank</label>
                                        <input  type="text" v-model="form.rank" name="rank" class="form-control" id="rank"
                                               :class="{ 'is-invalid': form.errors.has('rank') }">
                                        <has-error :form="form" field="rank"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="year">Year</label>
                                        <input  type="text" v-model="form.year" name="year" class="form-control" id="year"
                                               :class="{ 'is-invalid': form.errors.has('year') }">
                                        <has-error :form="form" field="year"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="work_place">Work Place</label>
                                        <input  type="text" v-model="form.work_place" name="versity" class="form-control" id="work_place"
                                               :class="{ 'is-invalid': form.errors.has('work_place') }">
                                        <has-error :form="form" field="work_place"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="work1"> work1</label>
                                        <textarea  name="work1" id="work1" v-model="form.work1" cols="30" class="form-control"
                                                  rows="6" :class="{ 'is-invalid': form.errors.has('work1') }" ></textarea>
                                        <has-error :form="form" field="work1"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="work2"> work2</label>
                                        <textarea  name="work2" id="work2" v-model="form.work2" cols="30" class="form-control"
                                                  rows="6" :class="{ 'is-invalid': form.errors.has('work2') }" ></textarea>
                                        <has-error :form="form" field="work2"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="work3"> work3</label>
                                        <textarea  name="work3" id="work3" v-model="form.work3" cols="30" class="form-control"
                                                  rows="6" :class="{ 'is-invalid': form.errors.has('work3') }" ></textarea>
                                        <has-error :form="form" field="work3"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="work4"> work4</label>
                                        <textarea  name="work4" id="work4" v-model="form.work4" cols="30" class="form-control"
                                                  rows="6" :class="{ 'is-invalid': form.errors.has('work4') }" ></textarea>
                                        <has-error :form="form" field="work4"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="status"> Status</label>
                                        <input  type="text" v-model="form.status" name="status" class="form-control" id="status"
                                               :class="{ 'is-invalid': form.errors.has('status') }">
                                        <has-error :form="form" field="status"></has-error>
                                    </div>
                                </div>


                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
name: "Edit",
    mounted(){
        axios.get(`/resume/experience/edit/${this.$route.params.experienceID}`)
            .then((response)=>{
                this.form.fill(response.data.experience)
            })
    },
    data(){
        return{
            form:new Form({
                rank: '',
                year: '',
                work_place: '',
                work1: '',
                work2: '',
                work3: '',
                work4: '',
                status: '',
            })
        }
    },
    methods:{
        updateExperience(){
            this.form.post(`/update-experience/${this.$route.params.experienceID}`)
                .then((response)=>{
                    this.$router.push('/resumes')

                    toast.fire({
                        icon: 'success',
                        title: 'Yah! Resume(Experience)Has Been successfully Updated !'
                    })
                })
                .catch(()=>{

                })
        }
    }
}
</script>

<style scoped>

</style>
