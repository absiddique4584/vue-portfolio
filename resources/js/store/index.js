export default {
    state:{
        heroes:[],
        facts:[]
    },
    getters:{
        allHeroes(state){
            return state.heroes
        },
        allFacts(state){
            return state.facts
        },

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
        }

    },
    mutations:{
        getheroes(state,data){
            return state.heroes = data
        },
        getFacts(state,data){
            return state.facts = data
        }

    }


}
