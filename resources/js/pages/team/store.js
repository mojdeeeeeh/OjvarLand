import TeamModule from './team/team';

export default new Vuex.Store({

    modules: {
        team: TeamModule,
    },

    state: {
        teams: [],
    },

    getters: {
        teamRecords: state => state.teams,
    },

    mutations: {
        /**
         * Sets the team.
         */
        setTeam: (state, data) => state.teams = data,
    },

    actions: {
        /**
         * Loads teams.
         */
        loadTeams(context, data) {
            return new Promise((response, reject) => {
                context.dispatch('team/loadTeams', data)
                    .then(res => {
                        context.commit('setTeam', res);

                        response(res);
                    })
                    .catch(err => reject(err));
            });
        },
    }
});
