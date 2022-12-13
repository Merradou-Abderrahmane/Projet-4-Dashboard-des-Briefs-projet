import axios from "axios";
import react from "react";

class index extends react.Component {
    constructor(props) {
        super(props);
        this.state = {
            data: [],
            task: "",
            id: ""
        };
}
    componentDidMount() {
        axios.get("http://localhost:3000/api/tasks").then((res) => {
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
                            {item.task}
                            <button onClick={() => this.handleDelete(item.id)}>Delete</button>
                        </li>
                    ))}
                </ul>
            </div>
        );
    }
}