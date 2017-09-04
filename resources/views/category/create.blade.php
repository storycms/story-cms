<script type="text/x-template" id="category-create">
  <div>
    <el-button type="primary" @click="modal = true">ADD NEW</el-button>
    <el-dialog title="Create category" :visible.sync="modal" v-loading.body="loading">
      <div class="form-group">
        <div class="row">
          <div class="col-md-10">
            <el-input type="text" v-model="form.name.en" placeholder="Category name" v-show="locale=='en'"></el-input>
            <el-input type="text" v-model="form.name.id" placeholder="Category name" v-show="locale=='id'"></el-input>
            <span class="help-block text-danger" v-if="errors.name">@{{ errors.name.toString() }}</span>
          </div>
          <div class="col-md-2">
            <el-select v-model="locale" slot="append" placeholder="Eng">
              <el-option label="en" value="en"></el-option>
              <el-option label="id" value="id"></el-option>
            </el-select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <el-input type="text" v-model="form.slug" placeholder="Slug"></el-input>
        <span class="help-block text-danger" v-if="errors.slug">@{{ errors.slug.toString() }}</span>
      </div>
      <div class="form-group">
        <el-select v-model="form.parent_id" placeholder="Select">
          <el-option
            v-for="item in categories"
            :key="item.id"
            :label="item.name[locale]"
            :value="item.id">
          </el-option>
        </el-select>
        <span class="help-block text-danger" v-if="errors.parent_id">@{{ errors.parent_id.toString() }}</span>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-md-10">
            <el-input type="textarea" v-model="form.description.en" placeholder="Category name" :rows="4" v-show="locale=='en'"></el-input>
            <el-input type="textarea" v-model="form.description.id" placeholder="Category name" :rows="4" v-show="locale=='id'"></el-input>
            <span class="help-block text-danger" v-if="errors.description">@{{ errors.description.toString() }}</span>
          </div>
          <div class="col-md-2">
            <el-select v-model="locale" slot="append" placeholder="Eng">
              <el-option label="en" value="en"></el-option>
              <el-option label="id" value="id"></el-option>
            </el-select>
          </div>
        </div>
      </div>
      <span slot="footer" class="dialog-footer">
        <el-button @click="modal = false">Cancel</el-button>
        <el-button type="primary" @click="create">Confirm</el-button>
      </span>
    </el-dialog>
  </div>
</script>