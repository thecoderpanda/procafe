import {FETCH_ORDERS,FETCH_ORDERS_DETAILS,FETCH_CUSTOMER_DETAILS} from './types';
import { addNewMessage } from './flashMessageAction';
import api from '../../../constants/api'

export const fetchOrders = (postData,authorization) => dispatch => {
    fetch(api.orders.viewOrder.path, {
        method: 'POST',
        headers: {
            "Accept": "application/json",
            "Content-Type": "application/json",
            "Authorization":authorization
        },
        body: JSON.stringify(postData),
    }).then(response => response.json())
        .then(post => {
            if (post.success == true) {
               dispatch({
                type: FETCH_ORDERS,
                payload: post.payload.data
                })
            }
            else {

            }
        }).catch((error) => {
            console.log(error)
            dispatch(addNewMessage({
                message: "Network error Please check your internet ",
                status: "error"
            }))
        });
}
export const updateOrdersStatus = (postData,authorization) => dispatch => {
    fetch(api.orders.updateOrderStatus.path, {
        method: 'POST',
        headers: {
            "Accept": "application/json",
            "Content-Type": "application/json",
            "Authorization":authorization
        },
        body: JSON.stringify(postData),
    }).then(response => response.json())
        .then(post => {
            console.log("server",post)
            if (post.success == true) {
               dispatch({
                type: FETCH_ORDERS,
                payload: post.payload.data
                })
                dispatch(addNewMessage({
                    message: postData.orderstatus_id == 2 ? "Order Accepted Successfully" :"Order Rejected Successfully",
                    status: post.status
                }))
            }
            else {
                dispatch(addNewMessage({
                    message: post.error.message,
                    status: post.status
                }))
            }
        }).catch((error) => {
            console.log(error)
            dispatch(addNewMessage({
                message: "Network error Please check your internet ",
                status: "error"
            }))
        });
}
export const fetchOrdersDetails = (postData,authorization) => dispatch => {
    fetch(api.orders.viewOrderDetails.path, {
        method: 'POST',
        headers: {
            "Accept": "application/json",
            "Content-Type": "application/json",
            "Authorization":authorization
        },
        body: JSON.stringify(postData),
    }).then(response => response.json())
        .then(post => {
            console.log(post)
            if (post.success == true) {
               dispatch({
                type: FETCH_ORDERS_DETAILS,
                payload: post.payload.data
                })
                dispatch({
                    type: FETCH_CUSTOMER_DETAILS,
                    payload: post.payload.customer
                    })


            }
            
        }).catch((error) => {
            console.log(error)
            dispatch(addNewMessage({
                message: "Network error Please check your internet ",
                status: "error"
            }))
        });
}

