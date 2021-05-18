const ADD = 'ADD';

export const actions = {
    addUser: (user) => ({ ADD, user }),
}

export const addUsers = (users) => {
    return {
    type: ADD,
    users,
    }
}

export const getItems = (users) => users.items;

const initialUsers = {
    items: [],
};

const usersReducer = (
    users = initialUsers,
    action
    ) => {
    switch (action.type) {
        case ADD:
        return {
            ...users,
            items: action.users
        }

    default:
        return users;
    }
};

export default usersReducer;
