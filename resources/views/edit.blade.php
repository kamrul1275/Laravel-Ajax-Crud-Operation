
                    <!-- Button trigger modal -->


                        <!-- Modal -->
                        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="editleModalLabel">Update Product</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <form>
                                @csrf

                               <input type="hidden" id="update_id" name="id">

                              <div class="modal-body">




                                    <div class="mb-3">
                                      <label for="Name" class="form-label">Product Name
                                      </label>
                                      <input type="text" class="form-control" name="update_name" id="update_name" aria-describedby="Name">

                                    </div>


                                    <div class="mb-3">
                                      <label for="Price" class="form-label">Price</label>
                                      <input type="text" class="form-control" name="update_price" id="update_price">
                                    </div>


                              </div>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Update</button>
                              </div>

                          </form>


                            </div>
                          </div>
                        </div>
