<style lang="scss">
.app-nav {
  background-color: #37474f;
  width: 100%;
  min-height: 100%;
  padding-top: 16px;
  margin: 0;
  .__button {
    background: none;
    border: none;
    color: #a6aeb2;
    color: rgba(255, 255, 255, 0.56);
    padding: 16px 40px;
    font-weight: 500;
    &:last-child,
    &:first-child {
      border-radius: 0;
    }
    &:focus {
      outline: none;
      background: none;
      color: #a6aeb2;
      color: rgba(255, 255, 255, 0.56);
    }
    &:hover {
      background: #000;
      color: #fff;
    }
    .__icon {
      margin-right: 32px;
      color: #78909c;
    }
  }
}
</style>

<template>
  <div class="list-group app-nav">
    <router-link class="list-group-item __button" to="/components">
      <span class="glyphicon glyphicon-th-large __icon"></span>
      应用
    </router-link>
    <router-link class="list-group-item __button" to="/users">
      <span class="glyphicon glyphicon-user __icon"></span>
      用户
    </router-link>
  </div>
</template>
