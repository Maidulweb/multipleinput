@extends('layouts.master')

@section('content') 


  <div class="mi-registration">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                <div class="alert alert-success">
                   {{ session('status') }}
                </div>
              @endif
              @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
              @foreach ($errors->all() as $error)
                         <li class="p-1" style="list-style: circle;">{{ $error }}</li>
              @endforeach
                     </ul>
                  </div>
              @endif
                <form action="{{ route('multicreate') }}" method="post">
                    @csrf
                    <div class="mi-block">
                      <h2>English Efficiency: <span style="color:#bf1e1e">*</span></h2>
                      <hr class="mi-block-hr">
                          
                          <div class="row">
                              <div class="col-md-2">
                                  <div class="form-group">
                                      <div class="form-check  form-check-inline ielts-padd">
                                        <input class="form-check-input ielts-width" type="checkbox" name="ielts" value="IELTS">
                                        <label class="form-check-label ielts-font">IELTS</label>
                                      </div><br>
                                      <div class="form-check form-check-inline pte-padd">
                                        <input class="form-check-input ielts-width" type="checkbox" name="pte" value="PTE">
                                        <label class="form-check-label ielts-font">PTE</label>
                                      </div>
                                    </div>
                              </div>
                              <div class="col-md-2">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Reading</label>
                                      <select class="form-control" name="ielts_reading">
                                          <option>4.5</option>
                                          <option>5.0</option>
                                          <option>5.5</option>
                                          <option>6.0</option>
                                          <option>6.5</option>
                                          <option>7.0</option>
                                          <option>7.5</option>
                                          <option>8.0</option>
                                          <option>8.5</option>
                                          <option>9</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <!-- <label for="exampleInputEmail1">Reading</label> -->
                                      <select class="form-control" name="pte_reading">
                                          <option>30</option>
                                          <option>36</option>
                                          <option>42</option>
                                          <option>50</option>
                                          <option>58</option>
                                          <option>65</option>
                                          <option>73</option>
                                          <option>79</option>
                                          <option>83</option>
                                          <option>86</option>
                                      </select>
                                    </div>
                              </div>
                              <div class="col-md-2"><div class="form-group">
                                  <label for="exampleInputEmail1">Speaking</label>
                                  <select class="form-control" name="ielts_speaking">
                                      <option>4.5</option>
                                      <option>5.0</option>
                                      <option>5.5</option>
                                      <option>6.0</option>
                                      <option>6.5</option>
                                      <option>7.0</option>
                                      <option>7.5</option>
                                      <option>8.0</option>
                                      <option>8.5</option>
                                      <option>9</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <!-- <label for="exampleInputEmail1">Speaking</label> -->
                                  <select class="form-control" name="pte_speaking">
                                      <option>30</option>
                                      <option>36</option>
                                      <option>42</option>
                                      <option>50</option>
                                      <option>58</option>
                                      <option>65</option>
                                      <option>73</option>
                                      <option>79</option>
                                      <option>83</option>
                                      <option>86</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-2">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Writing</label>
                                      <select class="form-control" name="ielts_writing">
                                          <option>4.5</option>
                                          <option>5.0</option>
                                          <option>5.5</option>
                                          <option>6.0</option>
                                          <option>6.5</option>
                                          <option>7.0</option>
                                          <option>7.5</option>
                                          <option>8.0</option>
                                          <option>8.5</option>
                                          <option>9</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <!--  <label for="exampleInputEmail1">Writing</label> -->
                                      <select class="form-control" name="pte_writing">
                                          <option>30</option>
                                          <option>36</option>
                                          <option>42</option>
                                          <option>50</option>
                                          <option>58</option>
                                          <option>65</option>
                                          <option>73</option>
                                          <option>79</option>
                                          <option>83</option>
                                          <option>86</option>
                                      </select>
                                    </div>
                              </div>
                              <div class="col-md-2">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Listening</label>
                                      <select class="form-control" name="ielts_listening">
                                          <option>4.5</option>
                                          <option>5.0</option>
                                          <option>5.5</option>
                                          <option>6.0</option>
                                          <option>6.5</option>
                                          <option>7.0</option>
                                          <option>7.5</option>
                                          <option>8.0</option>
                                          <option>8.5</option>
                                          <option>9</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <!--  <label for="exampleInputEmail1">Writing</label> -->
                                      <select class="form-control" name="pte_listening">
                                          <option>30</option>
                                          <option>36</option>
                                          <option>42</option>
                                          <option>50</option>
                                          <option>58</option>
                                          <option>65</option>
                                          <option>73</option>
                                          <option>79</option>
                                          <option>83</option>
                                          <option>86</option>
                                      </select>
                                    </div>
                              </div>
                              <div class="col-md-2">
                                  <div class="form-group">
                                      <label for="exampleFormControlSelect1">Overall Score</label>
                                      <select class="form-control" name="ielts_overall_score">
                                          <option>4.5</option>
                                          <option>5.0</option>
                                          <option>5.5</option>
                                          <option>6.0</option>
                                          <option>6.5</option>
                                          <option>7.0</option>
                                          <option>7.5</option>
                                          <option>8.0</option>
                                          <option>8.5</option>
                                          <option>9</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <!--  <label for="exampleFormControlSelect1">Overall Score</label> -->
                                       <select class="form-control" name="pte_overall_score">
                                         <option>30</option>
                                         <option>36</option>
                                         <option>42</option>
                                         <option>50</option>
                                         <option>58</option>
                                         <option>65</option>
                                         <option>73</option>
                                         <option>79</option>
                                         <option>83</option>
                                         <option>86</option>
                                       </select>
                                     </div>
                                     
                              </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  
            </form>
            </div>
        </div>
      </div>
</div>
        
    @endsection