import TeamLoad from "./load";

export default {
    namespaced: true,

    modules: {
        load: TeamLoad,
    },

    actions: {
        /**
         * Loads teams.
         */
        loadTeams(context, data){
            return new Promise((resolve, reject) => {
                context.dispatch('load/loadTeams', data)
                       .then(res => resolve(res))
                       .catch(err => reject(err));
            });
        },
    }
};

