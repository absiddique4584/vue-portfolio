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
                                <h3 class="card-title">Facts View Page <router-link to="/facts"><button class="btn btn-success">Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form >

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="icon">Icon</label>
                                        <input readonly type="text" v-model="form.icon" name="icon" class="form-control" id="icon"
                                               :class="{ 'is-invalid': form.errors.has('icon') }">
                                        <has-error :form="form" field="icon"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="number">Number</label>
                                        <input readonly type="text" v-model="form.number" name="number" class="form-control" id="number"
                                               :class="{ 'is-invalid': form.errors.has('number') }">
                                        <has-error :form="form" field="number"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input readonly type="text" v-model="form.name" name="name" class="form-control" id="name"
                                               :class="{ 'is-invalid': form.errors.has('name') }">
                                        <has-error :form="form" field="name"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="status">Status</label>
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
name: "View",
    mounted(){
        axios.get(`/view-fact/${this.$route.params.factID}`)
            .then((response)=>{
                this.form.fill(response.data.facts)
            })
    },
    data(){
        return{
            form:new Form({
                icon: '',
                number: '',
                name: '',
                status: '',
            })
        }
    },
    methods:{

    }
}
</script>

<style scoped>

</style>
