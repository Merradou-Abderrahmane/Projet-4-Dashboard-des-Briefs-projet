import axios from "axios";
import React from "react";

class Task extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            data: [],
            task: "",
            id: ""
        };
}
    componentDidMount() {
        axios.get("http://127.0.0.1:8000/api/tasks").then((res) => {
            this.setState({ data: res.data });
        });
    }

    handleChange = (e) => {
        this.setState({ task: e.target.value });
    }

    handleSubmit = (e) => {
        e.preventDefault();
        axios.post("http://localhost:3000/api/tasks", {
            task: this.state.task
        }).then((res) => {
            this.setState({ data: res.data });
        });
    }

    handleDelete = (id) => {
        axios.delete(`http://localhost:3000/api/tasks/${id}`).then((res) => {
            this.setState({ data: res.data });
        });
    }

    handleUpdate = (id) => {
        axios.put(`http://localhost:3000/api/tasks/${id}`, {
            task: this.state.task
        }).then((res) => {
            this.setState({ data: res.data });
        });
    }

    render() {
        return (
            <div>
                <form onSubmit={this.handleSubmit}>
                    <input type="text" onChange={this.handleChange} />
                    <button type="submit">Add</button>
                </form>
                <ul>
                    {this.state.data.map((item) => (
                        <li key={item.id}>
                            {item.name}
                            <button onClick={() => this.handleDelete(item.id)}>Delete</button>
                            <button onClick={() => this.handleUpdate(item.id)}>Update</button>
                        </li>
                    ))}
                </ul>
            </div>
        );
    }
}

export default Task;