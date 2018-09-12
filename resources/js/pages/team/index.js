import Store from './store.js'

new Vue({
	el: '#app',

	store: Store,

	data: {
	},

	computed: {
		teams: state => state.$store.getters.teamRecords,
		//teamData: state => Object.assign({}, state.$store.getters.teamData),
	},

	mounted() {
		this.loadTeams();
	},


	methods: {
		/**
		 * Load Teams
		 */
		loadTeams() {
			let data = {
				url: document.teams.pageUrls.team_index,
			};

			this.$store.dispatch('loadTeams', data);
		},
	}
})
