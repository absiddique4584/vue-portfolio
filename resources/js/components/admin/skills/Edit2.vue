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
                                <h3 class="card-title">Update Skill2 <router-link to="/skills"><button class="btn btn-success">Go Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" @submit.prevent="updateskill2()">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name"> Name</label>
                                        <input type="text" v-model="form.name" name="name" class="form-control" id="name" placeholder="Add New Name"
                                               :class="{ 'is-invalid': form.errors.has('name') }">
                                        <has-error :form="form" field="name"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="percent"> Percent(0 to 100)</label>
                                        <input type="text" v-model="form.percent" name="percent" class="form-control" id="percent" placeholder="Add New Percent"
                                               :class="{ 'is-invalid': form.errors.has('percent') }">
                                        <has-error :form="form" field="percent"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="value"> Value(0 to 100)</label>
                                        <input type="text" v-model="form.value" name="value" class="form-control" id="value" placeholder="Add New Value"
                                               :class="{ 'is-invalid': form.errors.has('value') }">
                                        <has-error :form="form" field="value"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="value"> Status(active or inactive)</label>
                                        <input type="text" v-model="form.status" name="status" class="form-control" id="status" placeholder="Add New status"
                                               :class="{ 'is-invalid': form.errors.has('status') }">
                                        <has-error :form="form" field="status"></has-error>
                                    </div>
                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
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
name: "Edit2",
    data(){
        return{
            form: new Form({
                name: '',
                percent: '',
                value: '',
                status: '',
            })
        }
    },
    mounted() {
        axios.get(`/editSkill2/${this.$route.params.skill2ID}`)
            .then((response)=>{
                this.form.fill(response.data.skills2)
            })
    },
    methods:{
        updateskill2(){
            this.form.post(`/update-skill2/${this.$route.params.skill2ID}`)
                .then((response)=>{
                    this.$router.push('/skills')

                    toast.fire({
                        icon: 'success',
                        title: 'Skill2 Updated successfully'
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
