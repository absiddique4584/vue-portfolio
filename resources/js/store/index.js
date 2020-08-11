export default {
    state:{
        heroes:[],

    },
    getters:{
        allHeroes(state){
            return state.heroes
        },

    },
    actions:{
        allHero(context){
            axios.get("/heroes")
                .then((response)=>{
                    context.commit('getheroes',response.data.heroes)
                })
        },


    },
    mutations:{
        getheroes(state,data){
            return state.heroes = data
        },


    }
}
