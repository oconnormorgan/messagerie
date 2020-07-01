import {
    apiServices
} from '../../_services/api.services';
import {
    authenticationService
} from '../../_services/authentication.service';

export default {
    data() {
        return {
            friends: []
        }
    },
    created() {
        authenticationService.currentUser.subscribe(x => (this.currentUser = x));
        this.getFriends();
    },
    methods: {
        getFriends() {
            apiServices.get("/api/friends/" + this.currentUser.id)
            .then(({ data }) => {
                this.friends = data.data.friends;
                console.log(this.friends)
            })
        },
    }
}
