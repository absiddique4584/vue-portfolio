export default {
    state:{
        heroes:[],
        facts:[],
        skills:[],
        skills2:[],
        services:[],
        testimonials:[],
        abouts:[]
    },
    getters:{
        allHeroes(state){
            return state.heroes
        },
        allFacts(state){
            return state.facts
        },
        AllSkills(state){
            return state.skills
        },
        AllSkills2(state){
            return state.skills2
        },
        getServices(state){
            return state.services
        },
        allTestimoni(state){
            return state.testimonials
        },
        allAbouts(state){
            return state.abouts
        }

    },
    actions:{
        allHero(context){
            axios.get("/heroes")
                .then((response)=>{
                    context.commit('getheroes',response.data.heroes)
                })
        },
        getallFacts(context){
            axios.get('/all-facts')
                .then((response)=>{
                    context.commit('getFacts',response.data.facts)
                })
        },
        getallSkills(context){
            axios.get('/all-skills')
                .then((response)=>{
                    context.commit('getSkills',response.data.skills)
                })
        },
        getallSkills2(context){
            axios.get('/all-skills2')
                .then((response)=>{
                    context.commit('getSkills2',response.data.skills2)
                })
        },
        allService(context){
            axios.get('/all-services')
                .then((response)=>{
                    context.commit('serviceList',response.data.services)
                })
        },
        getAllTestimonials(context){
            axios.get('/all-testimonial')
                .then((response)=>{
                    context.commit('allTestimonial',response.data.testimonials)
                })
        },
        getallAbout(context){
            axios.get('/all-about')
                .then((response)=>{
                    context.commit('aboutList',response.data.abouts)
                })
        }

    },
    mutations:{
        getheroes(state,data){
            return state.heroes = data
        },
        getFacts(state,data){
            return state.facts = data
        },
        getSkills(state,data){
            return state.skills = data
        },
        getSkills2(state,data){
            return state.skills2 = data
        },
        serviceList(state,data){
            return state.services = data
        },
        allTestimonial(state,data){
            return state.testimonials = data
        },
        aboutList(state,data){
            return state.abouts = data
        },

    }


}
