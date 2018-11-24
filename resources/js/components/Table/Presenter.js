import React from 'react';

export default props =>
    <table className="table table-hover">
        <thead>
            <tr>
                <th scope="col">
                    Name    
                </th>
                <th scope="col">
                    Created 
                </th>
                <th scope="col">
                    Updated
                </th>
            </tr>
        </thead>
        <tbody>
            {
                props.data.map(e =>
                    <tr key={e.name}>
                        <th scope="row">{e.name}</th>
                        <td>{e.created_at}</td>
                        <td>{e.updated_at}</td>
                    </tr>
                )
            }
        </tbody>
    </table>

