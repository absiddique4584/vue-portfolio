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
                                <h3 class="card-title">Resume(Education) Add Page <router-link to="/resumes"><button class="btn btn-success">Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form @submit.prevent="addEducation()">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="degree">Degree</label>
                                        <input  type="text" v-model="form.degree" name="degree" class="form-control" id="degree" placeholder="Add Degree"
                                               :class="{ 'is-invalid': form.errors.has('degree') }">
                                        <has-error :form="form" field="degree"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="year">Year</label>
                                        <input  type="text" v-model="form.year" name="year" class="form-control" id="year" placeholder="Add Year"
                                               :class="{ 'is-invalid': form.errors.has('year') }">
                                        <has-error :form="form" field="year"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="versity">University Name</label>
                                        <input  type="text" v-model="form.versity" name="versity" class="form-control" id="versity" placeholder="Add Versity Name"
                                               :class="{ 'is-invalid': form.errors.has('versity') }">
                                        <has-error :form="form" field="versity"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="skill"> Skill</label>
                                        <textarea  name="skill" id="skill" v-model="form.skill" cols="30" class="form-control" placeholder="Add Skills"
                                                  rows="6" :class="{ 'is-invalid': form.errors.has('skill') }" ></textarea>
                                        <has-error :form="form" field="skill"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="status"> Status (active,inactive)</label>
                                        <input  type="text" v-model="form.status" name="status" class="form-control" id="status" placeholder="Add Status"
                                               :class="{ 'is-invalid': form.errors.has('status') }">
                                        <has-error :form="form" field="status"></has-error>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add</button>
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
name: "Add",
    data(){
        return{
            form:new Form({
                degree: '',
                year: '',
                versity: '',
                skill: '',
                status: '',
            })
        }
    },
    methods:{
        addEducation(){
            this.form.post('/add-education')
                .then(( response ) => {
                    //console.log(response.data)
                    this.$router.push('/resumes')
                    toast.fire({
                        icon: 'success',
                        title: 'Yah! A Resume(Education) Has Been successfully Added'
                    })
                }).catch(()=>{

            })
        }
    }
}
</script>

<style scoped>

</style>
