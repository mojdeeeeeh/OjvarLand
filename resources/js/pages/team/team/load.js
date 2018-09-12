export default {
    namespaced: true,

    actions: {
        /**
         * Loads teams.
         */
        loadTeams(context, data) {
            return new Promise((response, reject) => {
                let url = data.url;

                axios.get(url)
                    .then(res =>
                    {
                    //     let data = {
                    //         ...res.data.meta,
                    //         ...res.data.links,
                    //         data: res.data.data
                    //     };

                        response(res.data);
                    })
                    .catch(err => reject(err));
            })
        },
    }
};
