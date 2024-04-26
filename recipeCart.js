// recipeCart.js - ??react

import React from "react";
import {
  MDBBtn,
  MDBCard,
  MDBCardBody,
  MDBCardImage,
  MDBCol,
  MDBContainer,
  MDBIcon,
  MDBInput,
  MDBRow,
  MDBTypography,
} from "mdb-react-ui-kit";

export default function PetRecipePage() {
  function handleDownload(recipeName) {
  }

  return (
    <section className="h-100 h-custom" style={{ backgroundColor: "#eee" }}>
      <MDBContainer className="h-100 py-5">
        <MDBRow className="justify-content-center align-items-center h-100">
          <MDBCol>
            <MDBCard className="pet-recipes" style={{ borderRadius: "15px" }}>
              <MDBCardBody className="text-black">
                <MDBRow>
                  <MDBCol lg="7" className="px-5 py-4">
                    <MDBTypography
                      tag="h3"
                      className="mb-5 pt-2 text-center fw-bold text-uppercase"
                    >
                      Your Pet Recipes
                    </MDBTypography>

                    <div className="d-flex align-items-center mb-5">
                      <div className="flex-shrink-0">
                        <MDBCardImage
                          src="path_to_your_recipe_image.jpg"
                          fluid
                          style={{ width: "150px" }}
                          alt="Pet recipe"
                        />
                      </div>

                      <div className="flex-grow-1 ms-3">
                        <a
                          href="#!"
                          className="float-end text-black"
                          onClick={() => handleDownload("Recipe 1")}
                        >
                          <MDBIcon fas icon="download" />
                        </a>
                        <MDBTypography tag="h5" className="text-primary">
                          Recipe 1
                        </MDBTypography>
                      </div>
                    </div>

                    <div className="d-flex align-items-center mb-5">
                      <div className="flex-shrink-0">
                        <MDBCardImage
                          src="path_to_your_recipe_image.jpg"
                          fluid
                          style={{ width: "150px" }}
                          alt="Pet recipe"
                        />
                      </div>

                      <div className="flex-grow-1 ms-3">
                        <a
                          href="#!"
                          className="float-end text-black"
                          onClick={() => handleDownload("Recipe 2")}
                        >
                          <MDBIcon fas icon="download" />
                        </a>
                        <MDBTypography tag="h5" className="text-primary">
                          Recipe 2
                        </MDBTypography>
                      </div>
                    </div>

                    <div className="d-flex align-items-center mb-5">
                      <div className="flex-shrink-0">
                        <MDBCardImage
                          src="path_to_your_recipe_image.jpg"
                          fluid
                          style={{ width: "150px" }}
                          alt="Pet recipe"
                        />
                      </div>

                      <div className="flex-grow-1 ms-3">
                        <a
                          href="#!"
                          className="float-end text-black"
                          onClick={() => handleDownload("Recipe 3")}
                        >
                          <MDBIcon fas icon="download" />
                        </a>
                        <MDBTypography tag="h5" className="text-primary">
                          Recipe 3
                        </MDBTypography>
                      </div>
                    </div>

                  </MDBCol>
                  <MDBCol lg="5" className="px-5 py-4">
                    <MDBTypography
                      tag="h3"
                      className="mb-5 pt-2 text-center fw-bold text-uppercase"
                    >
                      Cart Details
                    </MDBTypography>

                    {}
                    {}

                  </MDBCol>
                </MDBRow>
              </MDBCardBody>
            </MDBCard>
          </MDBCol>
        </MDBRow>
      </MDBContainer>
    </section>
  );
}