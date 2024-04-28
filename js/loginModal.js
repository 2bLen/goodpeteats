// loginModal.js

import React from 'react';

class LoginModal extends React.Component {
  render() {
    return (
      <div id="loginModal" className="modal">
        <div className="modal-content">
          <span className="close" onClick={this.props.closeModal}>&times;</span>
          <form id="loginForm" action="login.php" method="post">
            <input type="text" name="username" placeholder="username" />
            <input type="password" name="password" placeholder="password" />
            <button type="button" onClick={this.props.submitForm}>Log in</button>
          </form>
        </div>
      </div>
    );
  }
}

export default LoginModal;
