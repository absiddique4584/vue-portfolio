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
                            <form >

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="degree">Degree</label>
                                        <input readonly type="text" v-model="form.degree" name="degree" class="form-control" id="degree"
                                               :class="{ 'is-invalid': form.errors.has('degree') }">
                                        <has-error :form="form" field="degree"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="year">Year</label>
                                        <input readonly type="text" v-model="form.year" name="year" class="form-control" id="year"
                                               :class="{ 'is-invalid': form.errors.has('year') }">
                                        <has-error :form="form" field="year"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="versity">University Name</label>
                                        <input readonly type="text" v-model="form.versity" name="versity" class="form-control" id="versity"
                                               :class="{ 'is-invalid': form.errors.has('versity') }">
                                        <has-error :form="form" field="versity"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="skill"> Skill</label>
                                        <textarea readonly name="skill" id="skill" v-model="form.skill" cols="30" class="form-control"
                                        rows="6" :class="{ 'is-invalid': form.errors.has('skill') }" ></textarea>
                                        <has-error :form="form" field="skill"></has-error>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="status"> Status</label>
                                        <input readonly type="text" v-model="form.status" name="status" class="form-control" id="status"
                                               :class="{ 'is-invalid': form.errors.has('status') }">
                                        <has-error :form="form" field="status"></has-error>
                                    </div>
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
name: "Show",
    mounted(){
        axios.get(`/resume/education/show/${this.$route.params.resumeID}`)
            .then((response)=>{
                this.form.fill(response.data.education)
            })
    },
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
}
</script>

<style scoped>

</style>
