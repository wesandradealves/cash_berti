<?php
/**
 * Schemas Template.
 *
 * @package Schema Pro
 * @since 1.0.0
 */

if ( ! class_exists( 'BSF_AIOSRS_Pro_Schema_Job_Posting' ) ) {

	/**
	 * AIOSRS Schemas Initialization
	 *
	 * @since 1.0.0
	 */
	class BSF_AIOSRS_Pro_Schema_Job_Posting {

		/**
		 * Render Schema.
		 *
		 * @param  array $data Meta Data.
		 * @param  array $post Current Post Array.
		 * @return array
		 */
		public static function render( $data, $post ) {
			$schema = array();

			$schema['@context'] = 'https://schema.org';
			$schema['@type']    = 'JobPosting';

			$schema['title'] = ! empty( $data['title'] ) ? wp_strip_all_tags( (string)$data['title'] ) : NULL;

			$schema['description'] = ! empty( $data['description'] ) ? (string)$data['description'] : NULL;

			$schema['datePosted'] = ! empty( $data['start-date'] ) ? wp_strip_all_tags( (string)$data['start-date'] ) : NULL;

			$schema['validThrough'] = ! empty( $data['expiry-date'] ) ? wp_strip_all_tags( (string)$data['expiry-date'] ) : NULL;

			$schema['employmentType'] = ! empty( $data['job-type'] ) ? wp_strip_all_tags( (string)$data['job-type'] ) : NULL;

			if ( ! empty( $data['education-requirements'] ) ) {
				$schema['educationRequirements']['@type'] = 'EducationalOccupationalCredential';
				$schema['educationRequirements']['credentialCategory'] = wp_strip_all_tags( (string)$data['education-requirements'] );
			}

			if ( ! empty( $data['experience-requirements'] ) ) {
				$schema['experienceRequirements']['@type'] = 'OccupationalExperienceRequirements';
				$schema['experienceRequirements']['monthsOfExperience'] = wp_strip_all_tags( (string)$data['experience-requirements'] );
			}

			$schema['industry'] = ! empty( $data['industry'] ) ? wp_strip_all_tags( (string)$data['industry'] ) : NULL;

			$schema['qualifications'] = ! empty( $data['qualifications'] ) ? wp_strip_all_tags( (string)$data['qualifications'] ) : NULL;

			$schema['responsibilities'] = ! empty( $data['responsibilities'] ) ? wp_strip_all_tags( (string)$data['responsibilities'] ) : NULL;

			$schema['skills'] = ! empty( $data['skills'] ) ? wp_strip_all_tags( (string)$data['skills'] ) : NULL;

			$schema['workHours'] = ! empty( $data['work-hours'] ) ? wp_strip_all_tags( (string)$data['work-hours'] ) : NULL;

			if ( ( isset( $data['orgnization-name'] ) && ! empty( $data['orgnization-name'] ) ) ||
				( isset( $data['same-as'] ) && ! empty( $data['same-as'] ) ) ) {

				$schema['hiringOrganization']['@type'] = 'Organization';

				$schema['hiringOrganization']['name'] = wp_strip_all_tags( (string)$data['orgnization-name'] );
				if ( isset( $data['same-as'] ) && ! empty( $data['same-as'] ) ) {
					$schema['hiringOrganization']['sameAs'] = esc_url( $data['same-as'] );
				}
				if ( isset( $data['organization-logo'] ) && ! empty( $data['organization-logo'] ) ) {

					$schema['hiringOrganization']['logo'] = BSF_AIOSRS_Pro_Schema_Template::get_image_schema( $data['organization-logo'], 'ImageObject' );
				}
			}

			if ( ( isset( $data['location-street'] ) && ! empty( $data['location-street'] ) ) ||
				( isset( $data['location-locality'] ) && ! empty( $data['location-locality'] ) ) ||
				( isset( $data['location-postal'] ) && ! empty( $data['location-postal'] ) ) ||
				( isset( $data['location-region'] ) && ! empty( $data['location-region'] ) ) ||
				( isset( $data['location-country'] ) && ! empty( $data['location-country'] ) ) ) {

				$schema['jobLocation']['@type']            = 'Place';
				$schema['jobLocation']['address']['@type'] = 'PostalAddress';

				$schema['jobLocation']['address']['streetAddress'] = ! empty( $data['location-street'] ) ? wp_strip_all_tags( (string)$data['location-street'] ) : NULL;
				$schema['jobLocation']['address']['addressLocality'] = ! empty( $data['location-locality'] ) ? wp_strip_all_tags( (string)$data['location-locality'] ) : NULL;
				$schema['jobLocation']['address']['postalCode'] = ! empty( $data['location-postal'] ) ? wp_strip_all_tags( (string)$data['location-postal'] ) : NULL;
				$schema['jobLocation']['address']['addressRegion'] = ! empty( $data['location-region'] ) ? wp_strip_all_tags( (string)$data['location-region'] ) : NULL;
				$schema['jobLocation']['address']['addressCountry'] = ! empty( $data['location-country'] ) ? wp_strip_all_tags( (string)$data['location-country'] ) : NULL;
			}

			$schema['jobLocationType'] = ! empty( $data['job-location-type'] ) ? wp_strip_all_tags( (string)$data['job-location-type'] ) : NULL;

			if ( isset( $data['remote-location'] ) && ! empty( $data['remote-location'] ) ) {
				foreach ( $data['remote-location'] as $key => $value ) {
					$schema['applicantLocationRequirements'][ $key ]['@type'] = 'Country';
					$schema['applicantLocationRequirements'][ $key ]['name']  = wp_strip_all_tags( (string)$value['applicant-location'] );
				}
			} else {
				if ( isset( $data['applicant-location'] ) && ! empty( $data['applicant-location'] ) ) {
					$schema['applicantLocationRequirements']['@type'] = 'Country';
					$schema['applicantLocationRequirements']['name']  = wp_strip_all_tags( (string)$data['applicant-location'] );
				}
			}

			if ( isset( $data['salary-currency'] ) && ! empty( $data['salary-currency'] ) ) {
				$schema['baseSalary']['@type']    = 'MonetaryAmount';
				$schema['baseSalary']['currency'] = wp_strip_all_tags( (string)$data['salary-currency'] );
			}

			if ( ( isset( $data['salary'] ) && ! empty( $data['salary'] ) ) ||
				( isset( $data['salary-unit'] ) && ! empty( $data['salary-unit'] ) ) ) {

				$schema['baseSalary']['@type']          = 'MonetaryAmount';
				$schema['baseSalary']['value']['@type'] = 'QuantitativeValue';

				$schema['baseSalary']['value']['value'] = ! empty( $data['salary'] ) ? wp_strip_all_tags( (string)$data['salary'] ) : NULL;
				$schema['baseSalary']['value']['minValue'] = ! empty( $data['salary-min-value'] ) ? wp_strip_all_tags( (string)$data['salary-min-value'] ) : NULL;
				$schema['baseSalary']['value']['maxValue'] = ! empty( $data['salary-max-value'] ) ? wp_strip_all_tags( (string)$data['salary-max-value'] ) : NULL;
				$schema['baseSalary']['value']['unitText'] = ! empty( $data['salary-unit'] ) ? wp_strip_all_tags( (string)$data['salary-unit'] ) : NULL;
			}

			return apply_filters( 'wp_schema_pro_schema_job_posting', $schema, $data, $post );
		}

	}
}
